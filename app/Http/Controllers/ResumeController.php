<?php

namespace App\Http\Controllers;

use App\Kards;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Resume',
            'description' => 'resume'
        ];

        $kard = Kards::find(2);
        return view('resume' , compact('kard') , $data);
    }
}
