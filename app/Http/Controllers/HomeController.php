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


        if (session('idUsuario') == null) {
            return redirect()->route('welcome.login');
         }
         $type_user = session('typeOfUser');

         if ($type_user=='Developer') {
        
         $idUser = session('idUsuario');
         
         $apps =App::where('developer_id', $idUser)->paginate(10);
       
        return view('apps_developer', compact('apps'));
         
         }else{
           
            $idUser = session('idUsuario');

            $apps_user=PurchasedAppsClient::
            join('apps', 'purchased_apps_client.app_id', '=', 'apps.id')->where('purchased_apps_client.client_id', $idUser)->get();
           

            return view('app_user_client',compact('apps_user'));
         }
        
        
    }

    public function to_buy()
    {

        $type_user = session('typeOfUser');
         $idUser = session('idUsuario');

         if ($type_user=='Developer') {     
         $apps =App::where('developer_id', '!=', $idUser)->paginate(10);
       
        return view('apps_to_buy_developer', compact('apps'));
    }else{

         $apps_user=PurchasedAppsClient::
            leftjoin('apps', 'purchased_apps_client.app_id', '=', 'apps.id')->get();
           

            return view('apps_to_buy_client',compact('apps_user'));
         }

    }
        
    

  
    public function show($id)
    {
        
        $app = App::FindOrFail($id);

        return view('app_show',compact('app'));
    }

    public function endSession()
    {

        session(['idUsuario' => null]);
        session(['typeOfUser' => null]);
        
        return redirect()->route('welcome.login');
    }
}
