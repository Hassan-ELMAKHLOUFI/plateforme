<?php

namespace App\Http\Middleware;

use App\Session;
use Closure;

class SessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $session = Session::query()->where('session_id',$request->session()->get('id'))->first();
        $s = intval($request->s);
        if($request->session()->get('end') == 'true'){
            $request->session()->flush();
            return redirect()->route('session.index');
        }
        /*if ($request->session()->get('id') != $s){
            return redirect()->back();
        }*/
        if ($request->session()->get('username') === null) {
            return view('session.login');
        }
        return $next($request);

    }
}
