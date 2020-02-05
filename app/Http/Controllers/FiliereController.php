<?php

namespace App\Http\Controllers;

use App\filiere;
use App\departement;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filiere['filieres'] =filiere::OrderBy('id_filiere','asc')->paginate(10);
       
        return view('filiere.index',$filiere);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selects =Departement::all();
        foreach($selects as $select)
  { 


    if($select->nom==$request->nom_dep){ 
   
        $filiere=array(   
          
               
            'nom' => $request->nom ,
            'nombre_inscrit' =>$request->nombre_inscrit, 
            'id_departement' => $select->id_dep
            
              );
            }
            }
   
              filiere::create($filiere);
              return redirect()->route('filiere.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(filiere $filiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      
        $filiere=array(   
          
               
            'nom' => $request->nom ,
            'nombre_inscrit' =>$request->nombre_inscrit, 
            'id_departement' => $select->id_dep
            
              );
     
             Filiere::findOrfail($request->id_filiere)->update($filiere);
              return redirect()->route('filiere.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $filiere)
    {
        $delete=$filiere->all();
        $deletefiliere=Filiere::findOrfail($filiere->id_filiere);
         $deletefiliere->delete();
         return redirect()->route('filiere.index');
    }
}
