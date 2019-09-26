<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Kards;




class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About' ,
            'description' => 'About'
        ];

        $kard = Kards::with('projects')->get();
        //dd($kard);

        //$kard = Kards::find([1, 2, 3,4]);

       // $kard = Kards::find(2);
        return view('aboutindex' , compact('kard') , $data);

    }
    ## ROUTE '/about/{id}'
    ##  about/7
    ##  about/13
    ##  about/43
    public function show($id){
        $data = [
            'title' => 'About',
            'description' => 'About'
        ];

        $kard=Kards::find($id);
        return view('about',compact('kard'), $data);
    }


    public function delete($id){

     Kards::destroy($id);
     return redirect()->back();

    }
}
