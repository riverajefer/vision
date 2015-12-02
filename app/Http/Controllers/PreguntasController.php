<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SaveSession;
use App\Registros;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Response;
use Jenssegers\Agent\Agent;
use App\Helpers\Helper;
use DB;

class PreguntasController extends Controller
{

    protected $request;
    protected $session;
    protected $getId;

    public function __construct(Request $request) {

        $this->request = $request;
        
    }

    public function index()
    {
        return  view('index');
    }
    public function home()
    {
        return  view('index');
    }    

    public function start(Request $request)
    {
        if(empty(Session::get('session_id'))){

            Helper::saveSession();
        }
        else{

            $session = Session::get('session_id');
            $existe = SaveSession::where('cookie','=',$session)->first();

            if(empty($existe)){
                Helper::saveSession();
            }
 
        }
        return redirect('pregunta1');
    }

    public function pregunta1()
    {
 
        return  view('preguntas/pregunta1');
    }

    public function postPregunta1(Request $request)
    {

        if($request->ajax()){

            $session = Session::get('session_id');
            $getId = SaveSession::where('cookie', $session)->first()->id;
            $existe = Registros::where('session_id', $getId)->where('pregunta', 1)->first();

            if(empty($existe)){

                $registro = new Registros();
                $registro->session_id =  $getId;
                $registro->pregunta = 1;
                $registro->valor = $request->input('id');
                $registro->save();
                
            }else{
                DB::table('registros')
                ->where('session_id', $getId)->where('pregunta', 1)
                ->update(['valor' => $request->input('id')]);
            }

            return Response::json(['success'=>true]);
        }     
    }

    public function pregunta2()
    {
        return view('preguntas/pregunta2');
    }

    public function postPregunta2(Request $request)
    {

        if($request->ajax()){

            $session = Session::get('session_id');
            $getId = SaveSession::where('cookie', $session)->first()->id;
            $existe = Registros::where('session_id',$getId)->where('pregunta',2)->first();

            if(empty($existe)){

                $registro = new Registros();
                $registro->session_id =  $getId;
                $registro->pregunta = 2;
                $registro->valor = $request->input('id');
                $registro->save();
                
            }else{
                DB::table('registros')
                ->where('session_id', $getId)->where('pregunta', 2)
                ->update(['valor' => $request->input('id')]);
            }

            return Response::json(['success'=>true]);
        }     

    }
    public function pregunta3()
    {
        return view('preguntas/pregunta3');
    }

    public function postPregunta3(Request $request)
    {

        if($request->ajax()){

            $session = Session::get('session_id');
            $getId = SaveSession::where('cookie', $session)->first()->id;
            $existe = Registros::where('session_id',$getId)->where('pregunta', 3)->first();

            if(empty($existe)){

                $registro = new Registros();
                $registro->session_id =  $getId;
                $registro->pregunta = 3;
                $registro->valor = $request->input('id');
                $registro->save();
                
            }else{
                DB::table('registros')
                ->where('session_id', $getId)->where('pregunta', 3)
                ->update(['valor' => $request->input('id')]);
            }

            return Response::json(['success'=>true]);
        }      
    }

    public function pregunta4()
    {
        return view('preguntas/pregunta4');
    }

    public function postPregunta4(Request $request)
    {

        if($request->ajax()){

            $session = Session::get('session_id');
            $getId = SaveSession::where('cookie', $session)->first()->id;
            $existe = Registros::where('session_id',$getId)->where('pregunta',4)->first();

            if(empty($existe)){

                $registro = new Registros();
                $registro->session_id =  $getId;
                $registro->pregunta = 4;
                $registro->valor = $request->input('id');
                $registro->save();
                
            }else{
                DB::table('registros')
                ->where('session_id', $getId)->where('pregunta', 4)
                ->update(['valor' => $request->input('id')]);
            }

            return Response::json(['success'=>true]);
        }      
    } 
    public function pregunta5()
    {
        return view('preguntas/pregunta5');
    }

    public function postPregunta5(Request $request)
    {
        if($request->ajax()){

            $session = Session::get('session_id');
            $getId = SaveSession::where('cookie', $session)->first()->id;
            $existe = Registros::where('session_id',$getId)->where('pregunta',5)->first();

            if(empty($existe)){

                $registro = new Registros();
                $registro->session_id =  $getId;
                $registro->pregunta = 5;
                $registro->valor = $request->input('id');
                $registro->save();
                
            }else{
                DB::table('registros')
                ->where('session_id', $getId)->where('pregunta', 5)
                ->update(['valor' => $request->input('id')]);
            }

            return Response::json(['success'=>true]);
        }  
    }                
    public function calcula()
    {
        $session = Session::get('session_id');
        $getId = SaveSession::where('cookie', $session)->first()->id;        
        $suma = DB::table('registros')->where('session_id',$getId)->sum('valor');
        $puntos = DB::table('registros')->where('session_id',$getId)->sum('valor');

        switch ($puntos) {
            case $puntos> 20 :
                return " $puntos Eres un ExtremeCool"; 
                break;
            case $puntos>= 15 AND $puntos <=20:
                return " $puntos Eres un Autentico Cool";
                break;
            case $puntos>= 10 AND $puntos <=14:
                return " $puntos Eres un Frescool";
                break;
            case $puntos>= 5 AND $puntos <=9:

                return " $puntos Eres Casual";
                break;
            default:
                return "Eres Casual";
                break;
        }
        return "Calcula";
    }    
}
