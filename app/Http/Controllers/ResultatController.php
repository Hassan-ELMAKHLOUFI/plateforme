<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Reponse_text;
use App\Reponse_Bin;
use App\Reponse_QCM;
use App\Resultat;
use App\Option;
use App\qcm;
use App\Session;
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
        $qcms = qcm::find(array_values($request->input('qcms')));


        $somme = 0;

        $somme3 = 0;
        $somme2 = 0;
        $choices = option::find(array_values($request->input('questions')));
        $choices1 = option::find(array_values($request->input('options')));


        foreach ($choices as $choice) {
            if ($choice->point == 1) {
                $t = $choice->binaire;
                $somme = $somme + $t->note;
                $reponse_bin = array(
                    'test_id' => $test_id,
                    'binaire_id' => $choice->binaire_id,
                    'option_id' => $choice->option_id,
                    'session_id' => $request->etudiant_id,
                    'note' => $choice->point
                );
                Reponse_Bin::query()->create($reponse_bin);
            }
        }

        foreach ($qcms as $qcm) {
            $er = false;
            $somme2 = 0;
            $somme3 = 0;


            $option = DB::table('option')->where('question_id', '=', $qcm->question_id)->get();
            foreach ($option as $opt) {
                $somme2 = $somme2 + $opt->point;
            }

            foreach ($choices1 as $ch) {

                if ($ch->question_id == $qcm->question_id) {
                    $somme3 = $somme3 + $ch->point;
                    if ($ch->point == 0) {
                        $er = true;
                    }
                    $reponse_qcm = array(
                        'test_id' => $test_id,
                        'question_id' => $ch->question_id,
                        'option_id' => $ch->option_id,
                        'session_id' => $request->etudiant_id,
                        'note' => $ch->point
                    );
                    Reponse_QCM::query()->create($reponse_qcm);
                }

            }

            if ($somme2 == $somme3 && $er == false) {
                $somme = $somme + $qcm->note;
            }

        }
        $se = Session::find($request->etudiant_id)->first();
        $etudiant_id = $se->etudiant_id;
        for ($i = 0; $i < $request->nb_ql; $i++) {
            $name = 'fichier' . strval($i);
            if ($i != $request->nb_ql - 1) {
                $rp = array(
                    'question_id' => $request->question_id[$i],
                    'etudiant_id' => $etudiant_id,
                    'fichier' => $request->$name,
                );
                $reponse_text = Reponse_text::query()->create($rp);
            } else {
                $rp = array(
                    'question_id' => $request->question_id[$i],
                    'etudiant_id' => $request->etudiant_id,
                    'fichier' => $request->$name . '<p>' . strval($somme) . '</p>',
                );
                $reponse_text = Reponse_text::query()->create($rp);
            }
        }
        if($request->nb_ql == 0){
            $r = array(
                'session_id' => $se->session_id,
                'note_total' => $somme,
            );
            Resultat::query()->create($r);
            return compact('somme');
        }
        return compact('somme');
        return redirect()->back();
    }


    public function storeFinal(Request $request)
    {
        for ($i = 0; $i < $request->nbr; $i++) {
            $r = array(
                'session_id' => $request->session_id[$i],
                'note_total' => $request->note_final[$i],
            );
            Resultat::query()->create($r);
        }
        return redirect()->back();
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
        $qcm = DB::table('qcm')->where('test_id', '=', $test_id)->get();

        $somme = 0;
        $somme3 = 0;
        $somme2 = 0;
        $choices = option::find(array_values($request->input('questions')));
        $choices1 = option::find(array_values($request->input('options')));
        $qcms = DB::table('qcm')->where('test_id', $test_id);


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
