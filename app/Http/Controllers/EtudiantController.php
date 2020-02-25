<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $etudiants['etudiants'] = Etudiant::OrderBy('etudiant_id', 'asc')->paginate(10);
        return view('etudiant.index', $etudiants);
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
        $etudiant = array(
            'cin' => $request->cin,
            'cne' => $request->cne,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'niveau_id' => $request->id_niveau,
            'email_address' => $request->email_address,
            'username' => $request->username,
            'password' => $request->password,
            'numero' => $request->numero,
            'num_apologie' => $request->num_apologie
        );

        Etudiant::create($etudiant);
        return redirect()->route('etudiant.index');
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
    public function update(Request $request,$id)
    {
        //
        $etudiant = array(
            'cin' => $request->cin,
            'cne' => $request->cne,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'id_niveau' => $request->id_niveau,
            'email_address' => $request->email_address,
            'username' => $request->username,
            'password' => $request->password,
            'numero' => $request->numero,
            'num_apologie' => $request->num_apologie
        );

        Etudiant::findOrfail($request->id)->update($etudiant);
        return redirect()->route('etudiant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $etudiant)
    {
        //
        $delete = $etudiant->all();
        $deleteetudiant = Etudiant::findOrfail($etudiant->id);
        $deleteetudiant->delete();
        return redirect()->route('etudiant.index');
    }
    public function import(Request $request){
        Excel::import(new Etudiant,request()->file('file'));
        return back();
    }
}
