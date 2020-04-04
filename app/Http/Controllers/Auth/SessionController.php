<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{

    public function index()
    {
        return view('session.login');
    }

    public function sessionLogin(Request $request)
    {
        /*$sessions = Session::all();
        foreach ($sessions as $session) {
            if (strcmp($session->username, $request->username)==0&& strcmp($session->password , $request->password)) {
                return redirect()->action('TestController@index1', ['s' => $session->session_id]);
            }
        }

        return redirect()->route('session');*/
        $username = $request->username;
        $password = $request->password;
        $etudiantSession = Session::query()->where('username','=',$request->username)->where('active','=',true)->count();
        if(intval($etudiantSession) > 0){
            $etudiantSessionPass = Session::query()->where('username','=',$request->username)->first();
            if(strcmp($password,$etudiantSessionPass->password)==0){
                $request->session()->put('username',$username);
                $request->session()->put('id',$etudiantSessionPass->session_id);
                return redirect()->action('TestController@index1',['s'=>$etudiantSessionPass->session_id]);
            }else{
                $error = "le nom d'utilisateur ou le mot de passe sont incorrects";
                return redirect()->route('session.index')->with('error',$error);
            }
        }else{
            $error = "le nom d'utilisateur ou le mot de passe sont incorrects";
            return redirect()->route('session.index')->with('error',$error);
        }
    }

    public function SessionLogout(Request $request){
        $request->session()->flush();
        return redirect()->route('session.index');
    }


}
