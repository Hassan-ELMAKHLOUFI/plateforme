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
        $sessions = Session::all();
        foreach ($sessions as $session) {
            if (strcmp($session->username, $request->username)==0&& strcmp($session->password , $request->password)) {
                return redirect()->action('TestController@index1', ['s' => $session->session_id]);
            }
        }

        return redirect()->route('session');
    }


}
