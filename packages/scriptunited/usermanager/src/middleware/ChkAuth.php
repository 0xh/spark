<?php 

namespace Scriptunited\Usersentinel\Middleware;

use Scriptunited\Usersentinel\Models\Modules as Modules;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel as Sentinel;
use Closure;

class ChkAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!($user = Sentinel::check())){
            return redirect('/usernotlogin');
        }
        return $next($request);
    }
}



 ?>