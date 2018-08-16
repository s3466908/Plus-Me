<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Shows User Information based on user id -> for profile page
    public function show($id){
       $user = User::whereid($id)->first();
       
       if($user){
        //User exist 
        return view('pages/profile')->withUser($user);
       }
       else{
        //User doesn't exist 
        dd($user);
       }
    }
}
