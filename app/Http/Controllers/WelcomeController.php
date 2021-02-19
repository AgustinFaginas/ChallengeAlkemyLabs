<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

     public function index()
    {

        $category =Category::get(); 

             return view('index', compact('category'));
    }
     public function login()
    {
         
             return view('login');
    }

    public function initSession(Request $request)
    {


        $user =User::where('email', $request->get('email'))->first();

        if ($user != null ) {
            if ( $user->password != $request->get('password')) {
                return "password incorrecta";
            }
        session(['idUsuario' => $user->id]);
        if($request->get('type') == $user->typeUser){
        session(['typeOfUser' => $request->get('type')]);
        }
        else{
            return "Su tipo de usuario es incorrecto";

        }
        return redirect('/me/home');
        }else{
            return "user no existe";
        }
    	 
    }
}
