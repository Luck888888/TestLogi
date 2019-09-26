<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Contact',
            'description' => 'contact'
        ];
        return view('contact',$data);
    }


    public function mailsend(Request $request){

        dd($request);
    }


}
