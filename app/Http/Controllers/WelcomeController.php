<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
     public function index()
    {
         
             return view('welcome');
    }

    public function initSession(Request $request)
    {
    	session(['idUsuario' => $request->get('email')]);
    	session(['typeOfUser' => $request->get('type')]);

    	 return redirect('/me/home');
    }
}
