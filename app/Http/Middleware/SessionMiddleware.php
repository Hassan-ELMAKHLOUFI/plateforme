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
        $session = Session::query()->find($request->session()->get('id'));
        $s = intval($request->s);
        if ($request->session()->get('id') != $s){
            return redirect()->back();
        }

        if ($request->session()->get('username') === null) {
            return view('session.login');
        }

        return $next($request);

    }
}
