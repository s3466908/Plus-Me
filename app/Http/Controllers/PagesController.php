<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('pages.about');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function policy(){
        return view('pages.policy');
    }

}
