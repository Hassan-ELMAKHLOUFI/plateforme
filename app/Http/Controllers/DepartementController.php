<?php

namespace App\Http\Controllers;

use App\departement;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['admin']);
    }
    public function index(Request $request)
    {
        $departements['departements'] = Departement::OrderBy('departement_id', 'asc')->paginate(10);
        return view('departement.index', $departements);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departement = array(
            'nom' => $request->nom,
            'chef' => $request->chef,
            'date_cr' => $request->date_cr,
            'date_fin' => $request->date_fin
        );

        departement::create($departement);
        return redirect()->route('departement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\departement $departement
     * @return \Illuminate\Http\Response
     */
    public function show(departement $departement)
    {
        //
    }

    /**
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     *
     * Show the form for editing the specified resource.
     *
     * @param \App\departement $departement
     * @return \Illuminate\Http\Response
     */
    public function edit(departement $departement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\departement $departement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $departement = array(


            'nom' => $request->nom,
            'chef' => $request->chef,
            'date_cr' => $request->date_cr,
            'date_fin' => $request->date_fin,

        );

        Departement::findOrfail($request->departement_id)->update($departement);
        return redirect()->route('departement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\departement $departement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $departement)
    {

        $delete = $departement->all();
        $deletedepartement = Departement::findOrfail($departement->departement_id);
        $deletedepartement->delete();
        return redirect()->route('departement.index');
    }

    public function import(Request $request){
        Excel::import(new departement,request()->file('file'));
        return back();
    }
}
