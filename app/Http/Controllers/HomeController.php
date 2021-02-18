<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
     /**
     * Display a listing of proyectos.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $type_user = session('typeOfUser');

         if ($type_user=='Developer') {
             $valor_almacenado = session('idUsuario');
         $apps =App::where('developerEmail', $valor_almacenado)->paginate(10);
        return view('home', compact('apps','valor_almacenado','type_user'));
         }else{
            return "hola";
         }
        
        
    }

  
    public function show($id)
    {
        
        $app = App::FindOrFail($id);

        return view('show',compact('app'));
    }
}
