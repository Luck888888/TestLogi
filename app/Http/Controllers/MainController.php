<?php

namespace App\Http\Controllers;

use App\Events\onAddArticleEvent;
use App\Services\Search;
use Illuminate\Http\Request;
use DB;
use MetaTag;
use App\Kards;
use Event;

class MainController extends Controller
{

    public function index()
    {
     $data = [
           'title' => 'Tatsiana',
          'description' => 'Test'
       ];

//     MetaTag::setTags(['title'=>'Tatsiana',
//                        'description' => 'Test']);

//        $kard=DB::table('kards')->get();
//
//        return view('template', compact('kard'),$data);
//
//        $var=App::make('Search');



        //выборка из базы данных всех записей одной модели. Одного поля бд
        //метод стандартной модели
//        $articles=Kards::all();
//        foreach ($articles as $article){
//            echo $article->job.'<br/>';
//        }


       // выборка при помощи конструктора запроса
//        $articles=Kards::where('id','>','3')
//                  ->orderBy('fullname')
//                  ->take(2)
//                  ->get();
//        echo $articles;


        //порционная выборка из бд
//        Kards::chunk(31,function($articles){
//            echo $articles.'<br/>';
//        });



        //Cвязи в бд.
        //$kards= Kards::all();Обычная ленивая загрузка. Выдает 30 запросов к бд
//        foreach ($kards as $proj){
//            dump($proj->projects);
//            //projects - это функция в модели Kards.
//        }
//         $kards= Kards::with('projects')->get(); //жадная загрузка, всего два запроса к бд
//        foreach ($kards as $proj){
//            dump($proj->projects );
//            //projects - это функция в модели Kards.
//        }

//        $kards=Kards::has('projects')->get();//выведет только тех, кто добавил проекты 9 записей
//        foreach ($kards as $proj){
//             dump($proj);
//         }


        //События, См. документацию
//        Event::fire(new onAddArticleEvent);
    }
}
