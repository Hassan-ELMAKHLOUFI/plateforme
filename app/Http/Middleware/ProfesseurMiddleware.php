<?php

namespace App\Http\Middleware;

use App\Professeur;
use Closure;

class ProfesseurMiddleware
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
        $professeur = Professeur::query()->find($request->session()->get('p_id'));
        if ($professeur !== null) {
            $professeur = Professeur::query()->find($request->session()->get('p_id'))->first();
            if ($request->session()->get('p_username') !== $professeur->username) {
                return redirect()->route('profauth.login');
            }else{
                return $next($request);
            }
        }else{
            return $next($request);
        }

    }
}
