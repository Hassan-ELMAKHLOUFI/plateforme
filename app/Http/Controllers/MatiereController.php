<?php

namespace App\Http\Controllers;

use App\Matiere;
use App\Professeur;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $matieres['matieres'] = Matiere::OrderBy('matiere_id', 'asc')->paginate(10);
        return view('matiere.index', $matieres);
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
        $matiere = array(
            'nom_matiere' => $request->nom_matiere,
            'volume_horaire' => $request->volume_horaire,
            'module_id' => $request->module_id

        );

        $m = new Matiere($matiere);
        $p = Professeur::query()->findOrFail($request->professeur_id);
        $p->matiere()->save($m);
        return redirect()->route('matiere.index');
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
        $matiere = array(
            'nom_matiere' => $request->nom_matiere,
            'volume_horaire' => $request->volume_horaire,
            'module_id' => $request->module_id
        );

        Matiere::findOrFail($request->matiere_id)->update($matiere);
        return redirect()->route('matiere.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $matiere)
    {
        //
        $delete = $matiere->all();
        $deletematiere = Matiere::findOrfail($matiere->matiere_id);
        $deletematiere->delete();
        return redirect()->route('matiere.index');
    }

    public function import(Request $request){
        Excel::import(new Matiere,request()->file('file'));
        return back();
    }
}
