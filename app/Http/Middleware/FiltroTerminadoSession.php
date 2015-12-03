<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Middleware;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;
use App\SaveSession;

class FiltroTerminadoSession implements Middleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    	$session = Session::get('session_id');
    	if(!empty($session))
    	{

			$getId = SaveSession::where('cookie', $session)->first()->id;        
		    $cuenta = DB::table('registros')->where('session_id',$getId)->count();
        	$puntos = DB::table('registros')->where('session_id',$getId)->sum('valor');

		    if($cuenta!=5)	{
	    		return redirect('home');
		    }        	
		}else{
			return redirect('home');
		}

	     return $next($request);
   	}
}

