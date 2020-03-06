<?php

namespace App\Http\Controllers;

use App\Groupe;
use App\Etudiant;

use Illuminate\Http\Request;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groupes = Groupe::all();
        return view('groupe.index',compact('groupes'));
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
        //
        $nbe = ceil(Etudiant::query()->count() / $request->ng);
        $skip = 0;
        for ($i = 0; $i < $nbe; $i++) {


            $groupe = array(
                'test_id' => 1,
                'filiere_id' => $request->filiere_id,
                'niveau_id' => $request->niveau_id,
                'nombre_etudiant' => $request->ng,
            );

            $g = new Groupe($groupe);
            $etudiant = Etudiant::query()->skip($skip)->take($request->ng)->get();
            $skip += $request->ng;
            foreach ($etudiant as $e) {
                $e->groupe()->save($g);
            }

        }
        return redirect()->route('groupe.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
