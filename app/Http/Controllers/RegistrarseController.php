<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrarseController extends Controller
{
     public function __invoke(Request $request)
    {
          
        return view('registrarse');
    }
}
