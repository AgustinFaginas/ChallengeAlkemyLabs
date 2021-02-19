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
             $idUser = session('idUsuario');
         $apps =App::where('developer_id', $idUser)->paginate(10);
        return view('apps_developer', compact('apps','valor_almacenado','type_user'));
         }else{

            return view('app_user_client');
         }
        
        
    }

  
    public function show($id)
    {
        
        $app = App::FindOrFail($id);

        return view('show',compact('app'));
    }
}
