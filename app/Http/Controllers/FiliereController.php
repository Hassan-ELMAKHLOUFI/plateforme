<?php

namespace App\Http\Controllers;

use App\filiere;
use App\departement;
use App\Niveau;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FiliereController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filiere['filieres'] = filiere::OrderBy('filiere_id', 'asc')->paginate(10);

        return view('filiere.index', $filiere);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selects = Departement::all();
        foreach ($selects as $select) {


            if ($select->nom == $request->nom_dep) {

                $filiere = array(

                    'nom' => $request->nom,
                    'coordinateur' => $request->coordinateur,
                    'datedebut' => $request->datedebut,
                    'datefin' => $request->datefin,
                    'departement_id' => $select->departement_id

                );
                $f = new filiere($filiere);
                $n = Niveau::query()->findOrFail($request->niveau_id);
                $n->filiere()->save($f);
                return redirect()->route('filiere.index');
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\filiere $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\filiere $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(filiere $filiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\filiere $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $selects = Departement::all();
        foreach ($selects as $select) {

            if ($select->nom == $request->nom_dep) {

                $filiere = array(
                    'nom' => $request->nom,
                    'coordinateur' => $request->coordinateur,
                    'datedebut' => $request->datedebut,
                    'datefin' => $request->datefin,
                    'departement_id' => $select->departement_id

                );
            }
        }

        Filiere::findOrfail($request->filiere_id)->update($filiere);
        return redirect()->route('filiere.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\filiere $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $filiere)
    {
        $delete = $filiere->all();
        $deletefiliere = Filiere::findOrfail($filiere->filiere_id);
        $deletefiliere->delete();
        return redirect()->route('filiere.index');
    }

    public function import(Request $request){
        Excel::import(new filiere,request()->file('file'));
        return back();
    }
}

