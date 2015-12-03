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

class PerfilController extends Controller
{


    public function ExtremeCool()
    {
        return view('resultados/extreme');
    }
    public function Autentico()
    {
        return view('resultados/autentico');
    }
  
    public function FressCool()
    {
        return view('resultados/fres');
    }
  
    public function Casual()
    {
        return view('resultados/casual');
    }

}
