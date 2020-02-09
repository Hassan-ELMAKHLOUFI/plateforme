<?php

namespace App\Http\Controllers;

use App\Matiere;
use Illuminate\Http\Request;

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
        $matieres['matieres'] = Matiere::OrderBy('id_math', 'asc')->paginate(10);
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
            'id_module' => $request->id_module

        );

        Matiere::create($matiere);
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
            'id_module' => $request->id_module
        );

        Matiere::findOrFail($request->id_math)->update($matiere);
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
        $deletematiere = Matiere::findOrfail($matiere->id_math);
        $deletematiere->delete();
        return redirect()->route('matiere.index');
    }
}
