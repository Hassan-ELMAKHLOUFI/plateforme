<?php

namespace App\Http\Controllers;

use App\filiere;
use App\Matiere;
use App\Module;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $modules['modules'] = Module::OrderBy('module_id', 'asc')->paginate(10);
        return view('module.index', $modules);
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
        $module = array(
            'nom_module' => $request->nom_module,
        );

        $m = new Module($module);
        $f = Filiere::query()->findOrFail($request->filiere_id);
        $f->module()->save($m);
        return redirect()->route('module.index');
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
        $module = array(
            'nom_module' => $request->nom_module,
        );

        Module::findOrFail($request->module_id)->update($module);
        return redirect()->route('module.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $module)
    {
        $delete = $module->all();
        $deletemodule = Module::findOrfail($module->module_id);
        $deletemodule->delete();
        return redirect()->route('module.index');
    }

    public function import(Request $request){
        Excel::import(new Module,request()->file('file'));
        return back();
    }
}
