<?php

namespace App\Http\Controllers;

use App\Resultat;
use App\Option;
use App\qcm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $test_id = $request->test_id;
        $qcms = DB::table('question')->where('test_id', '=', $test_id)->where('type', '=', 'multiple')->get();


        $somme = 0;
        $somme3 = 0;
        $somme2 = 0;
        $choices = option::find(array_values($request->input('questions')));
        $choices1 = option::find(array_values($request->input('options')));


        foreach ($choices as $choice) {
            $somme = $somme + $choice->point;
        }

        foreach ($qcms as $qcm) {
            $erreur = false;
            $option = DB::table('option')->where('question_id', '=', $qcm->question_id)->get();
            foreach ($option as $opt) {

                $somme2 = $somme2 + $opt->point;
            }

            foreach ($choices1 as $ch) {
                if ($ch->question_id == $qcm->question_id) {
                    $somme3 = $somme3 + $ch->point;
                    if ($ch->point == 0) {
                        $erreur = true;
                    }
                }

            }

            if ($somme2 == $somme3 && $erreur == false) {

                $somme = $somme + 1;

            }
        }


        return compact('somme');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function show(Resultat $resultat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function edit(Resultat $resultat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultat $resultat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Resultat $resultat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resultat $resultat)
    {
        //
    }

    public function test($request)
    {
        $test_id = $request->test_id;
        $qcm = DB::table('question')->where('test_id', '=', $test_id)->where('type', '=', 'multiple')->get();

        $somme = 0;
        $somme3 = 0;
        $somme2 = 0;
        $choices = option::find(array_values($request->input('questions')));
        $choices1 = option::find(array_values($request->input('options')));
        $qcms = DB::table('question')->where('test_id', $test_id);


        foreach ($choices as $choice) {
            $somme = $somme + $choice->point;
        }
        foreach ($qcms as $qcm) {
            $option = $qcm->options;
            foreach ($option as $opt) {
                $somme2 = $somme2 + $opt->point;
            }

            foreach ($choices1 as $choice) {
                if ($choice->question_id == $qcm->question_id) {
                    $somme3 = $somme3 + $choice->point;
                }

            }
            if ($somme2 == $somme3) {
                $sommme = $somme + 1;
            }
        }


        return compact('somme');
    }
}
