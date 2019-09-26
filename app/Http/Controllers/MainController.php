<?php

namespace App\Http\Controllers;

use App\Services\Search;
use Illuminate\Http\Request;
use DB;
use MetaTag;

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

        $kard=DB::table('kards')->get();

        return view('template', compact('kard'),$data);

        $var=App::make('Search');
    }
}
