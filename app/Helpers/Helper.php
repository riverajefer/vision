<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Session;
use App\SaveSession;
use Illuminate\Http\Request;

class Helper
{
    public static function hola()
    {
        return "Hola Mundo";
    }

    public static function saveSession()
    {

        $session_id = uniqid();
        Session::put('session_id', $session_id);        

        $agent = new Agent();

        $browser    = $agent->browser();
        $version    = $agent->version($browser);
        $platform   = $agent->platform();
        $versionpla = $agent->version($platform);
        $device     = $agent->device();

        $session = new SaveSession();

        $session->browser 	 = $browser;
        $session->version 	 = $version;
        $session->platform 	 = $browser;
        $session->versionpla = $versionpla;
        $session->device 	 = $device;
        //$session->ip 		 = $request->ip;
        $session->cookie 	 = $session_id;

        $session->save(); 
    }    

    public static function retornaHome()
    {

    	$session = Session::get('session_id');
    	if(empty($session)){
    		return redirect('/');
    	}

    }
}