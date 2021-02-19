<?php

namespace App\Http\Controllers;

use App\App;
use App\PurchasedAppsClient;
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
           
            $idUser = session('idUsuario');

            $apps_user=PurchasedAppsClient::
            join('apps', 'purchased_apps_client.app_id', '=', 'apps.id')->where('purchased_apps_client.client_id', $idUser)->get();
           

            return view('app_user_client',compact('apps_user'));
         }
        
        
    }

  
    public function show($id)
    {
        
        $app = App::FindOrFail($id);

        return view('app_show',compact('app'));
    }
}
