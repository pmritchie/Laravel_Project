<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $tasks = [
            'Go to the store',
            'Go to the market',
            'Go to work'
        ];
        return view('welcome', [
            'foo' => 'Welcome'
        ]);
    }

    public function about(){
        return view('about', [
            'foo' => 'About'
        ]);
    }

    public function contact(){
        return view('contact', [
            'foo' => 'Contact'
        ]);
    }
}
