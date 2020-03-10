<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Professeur;
use App\Session;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Reference;

class ProfauthController extends Controller
{
    public function index()
    {
        return view('profauth.login');
    }

    public function professeurLogin(Request $request)
    {
        $profs = Professeur::all();
        foreach ($profs as $prof) {
            if ((strcmp($prof->username, $request->username)==0) && (strcmp($prof->password , $request->password)==0)) {
                return view('profauth.test')->with('prof',$prof);
            }
        }
        return redirect()->route('profauth.login');
    }

}
