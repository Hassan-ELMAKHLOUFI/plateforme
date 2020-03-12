<?php

namespace App\Http\Middleware;

use App\Admin;
use Closure;

class AdminMiddleware
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
        //$session = Admin::query()->find($request->session()->get('a_id'));

        if ($request->session()->get('a_username') === null) {
            return redirect()->route('admin.index');
        }

        return $next($request);
    }
}
