<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //function to return the welcome view 
    public function index(){
        return view('welcome');
    }

}
