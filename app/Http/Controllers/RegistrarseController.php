<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrarseController extends Controller
{
    public function  create(Request $request)
    {
    	return view('registrarse');
    }

    public function save()
    {

    	if (session('idUsuario') != null) {
    		return redirect()->route('apps.index');
    	}
 

    	User::create([
    		'name' => request('name'),
    		'email' => request('email'),
    		'password' => request('password'),
    		'typeUser' => request('type')

    	]);


    	return redirect()->route('apps.index');
    }
}
