<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Portfolio',
            'description' => 'portfolio'
        ];
        return view('portfolio',$data);
    }
}
