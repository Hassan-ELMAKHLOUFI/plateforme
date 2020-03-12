<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Admin;
use App\Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function adminLogin(Request $request)
    {
        /*$admins = Admin::all();
        foreach ($admins as $admin) {
            if (strcmp($admin->username, $request->username)==0 && strcmp($admin->password , $request->password)) {
                return redirect()->route('departement.index');
            }
        }

        return redirect()->route('admin');*/
        if ($request->session()->get('a_username') !== null) {
            $username = $request->session()->get('a_username');
            $password = $request->session()->get('a_password');
        } else {
            $username = $request->username;
            $password = $request->password;
        }
        $admin = Admin::query()->where('username', '=', $username)->count();
        if (intval($admin) > 0) {
            $adminPass = Admin::query()->where('username', '=', $username)->first();
            if (strcmp($password, $adminPass->password) == 0) {
                $request->session()->put('a_username', $username);
                $request->session()->put('a_password', $password);
                $request->session()->put('a_id', $adminPass->admin_id);
                return redirect()->route('departement.index');
            } else {
                return redirect()->route('admin.index');
            }
        } else {
            return redirect()->route('admin.index');
        }
    }

    public function adminLogout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('admin.index');
    }
}
