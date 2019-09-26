<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Contracts\Auth\Guard;
use Cache;
use Illuminate\Http\JsonResponse;
use  Illuminate\Support\Facades\Log;
use Helper;


class Caching
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    const DEFAULT_VIEW = 0;
    const MOBILE_VIEW = 1;

    public function handle($request, Closure $next)
    {

        $key = $request->url();
        $hot = $request->input('hot');
        $viewTypeCurrent = self::DEFAULT_VIEW;

        if (Helper::detectMobile()) {
            $viewTypeCurrent = self::MOBILE_VIEW;
        }

        switch ($viewTypeCurrent) {
            case self::MOBILE_VIEW:
                $cacheStoreCurrent = Cache::store('memcached-mobile');
                break;

            default:
                $cacheStoreCurrent = Cache::store('memcached');
                break;
        }

        if (config('app.cache_enabled') && !$hot && $cacheStoreCurrent->has($key)) {
            foreach (config('cache.headers_rss') as $validateRss) {
                if (stristr($key, $validateRss)) {
                    return Response($cacheStoreCurrent->get($key))
                        ->header('Content-Type', 'application/rss+xml; charset=utf-8');
                }
            }
            return Response($cacheStoreCurrent->get($key));
        }

        $request->attributes->add([
            'cacheKey' => $key,
            'viewType' => $viewTypeCurrent
        ]);

        $response = $next($request);

        $cachingTime = config('app.cache_ttl');
        $viewTypesStores = [
            self::DEFAULT_VIEW => Cache::store('memcached'),
            self::MOBILE_VIEW => Cache::store('memcached-mobile')
        ];

        if (is_a($response, JsonResponse::class)
            || is_string($response->original)
            || is_a($response->original, 'Illuminate\View\View')
        ) {
            if ($response->status() == 200 && config('app.cache_enabled')) {
                foreach ($viewTypesStores as $store) {
                    $store->forget($key);
                }
                if (strlen($response->getContent()) > config('app.cache_empty_response_length')) {
                    foreach ($viewTypesStores as $store) {
                        $store->put($key, $response->getContent(), $cachingTime);
                    }
                } else {
                    $response->setStatusCode(202, '');
                    $response->header('Retry-After', '0');
                }
            }

            if ($response->status() == 404 && config('app.cache_enabled')) {
                foreach ($viewTypesStores as $store) {
                    $store->forget($key);
                }
            }

            $responseNew = $response;
        } else {
            if(!is_array($response->original)){
                Log::info('Response->original type', [gettype($response->original)]);
                Log::info('Response->original value', [$response->original]);
            }

            foreach ($response->original as $viewType => $view) {
                if ($response->status() == 200 && config('app.cache_enabled')) {
                    $viewTypesStores[$viewType]->forget($key);
                    $html = $view->render();
                    if (strlen($html) > config('app.cache_empty_response_length')) {
                        $viewTypesStores[$viewType]->put($key, $html, $cachingTime);
                    } else if ($viewType == $viewTypeCurrent) {
                        $responseNew = response($response->original[$viewTypeCurrent]);
                        $responseNew->setStatusCode(202, '');
                        $responseNew->header('Retry-After', '0');
                    }
                }

                if ($response->status() == 404 && config('app.cache_enabled')) {
                    $viewTypesStores[$viewType]->forget($key);
                }
            }
            if (empty($responseNew)) {
                $responseNew = response($response->original[$viewTypeCurrent]);
            }
        }

        return $responseNew;
    }

}
