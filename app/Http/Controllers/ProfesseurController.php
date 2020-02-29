<?php

namespace App\Http\Controllers;

use App\Professeur;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $professeurs['professeurs'] = Professeur::OrderBy('professeur_id', 'asc')->paginate(10);
        return view('professeur.index', $professeurs);
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
        $professeur = array(
            'cin' => $request->cin_p,
            'nom' => $request->nom_p,
            'prenom' => $request->prenom_p,
            'username' => $request->username_p,
            'email' => $request->email_p,
            'password' => $request->password_p,
            'grade' => $request->grade_p,
            'departement_id' => $request->departement_id
        );

        Professeur::create($professeur);
        return redirect()->route('professeur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Professeur $professeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Professeur $professeur)
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
    public function update(Request $request)
    {
        $professeur = array(

            'cin' => $request->cin_p,
            'nom' => $request->nom_p,
            'prenom' => $request->prenom_p,
            'username' => $request->username_p,
            'email' => $request->email_p,
            'password' => $request->password_p,
            'grade' => $request->grade_p,
            'departement_id' => $request->departement_id

        );

        Professeur::findOrfail($request->professeur_id)->update($professeur);
        return redirect()->route('professeur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $professeur)
    {

        $delete = $professeur->all();
        $deleteprofesseur = Professeur::findOrfail($professeur->professeur_id);
        $deleteprofesseur->delete();
        return redirect()->route('professeur.index');
    }

    public function import(Request $request){
        Excel::import(new Professeur ,request()->file('file'));
        return back();
    }
}
