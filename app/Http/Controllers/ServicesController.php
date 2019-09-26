<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Services',
            'description' => 'services'
        ];
        return view('services',$data);
    }
}
