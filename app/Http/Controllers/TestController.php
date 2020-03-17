<?php

namespace App\Http\Controllers;


use App\Etudiant;
use App\Groupe;
use App\Professeur;
use App\Reponse_text;
use App\Session;
use App\Test;
use App\Text_libre;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Barryvdh\DomPDF\Facade as PDF;
use Maatwebsite\Excel\Facades\Excel;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tests['tests'] = Test::OrderBy('test_id', 'asc')->paginate(10);
        return view('create-test.index', $tests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $test = array(
            'nom' => $request->nom,
            'note' => $request->note,
            'duree' => $request->duree,
            'salle' => $request->salle,
            'date' => $request->date,
            'discription' => $request->discription,
            'professeur_id' => $request->professeur_id,
            'matiere_id' => $request->matiere_id
        );

        $p = Professeur::query()->find($request->professeur_id)->get();

        $currentTest = Test::query()->create($test);

        $nbe = ceil(Etudiant::query()->count() / $request->ng);
        $numEtu = Etudiant::query()->count();
        $skip = 0;
        for ($i = 0; $i < $nbe; $i++) {

            if ($numEtu > $request->ng) {
                $groupe = array(
                    'test_id' => $currentTest->test_id,
                    'filiere_id' => $request->filiere_id,
                    'niveau_id' => $request->niveau_id,
                    'nombre_etudiant' => $request->ng,

                );

                $g = new Groupe($groupe);

                $etudiant = Etudiant::query()->skip($skip)->take($request->ng)->get();
                $numEtu = $numEtu - $request->ng;
                $skip += $request->ng;
            } else {
                $groupe = array(
                    'test_id' => $currentTest->test_id,
                    'filiere_id' => $request->filiere_id,
                    'niveau_id' => $request->niveau_id,
                    'nombre_etudiant' => $numEtu,
                );


                $g = new Groupe($groupe);
                $etudiant = Etudiant::query()->skip($skip)->take($numEtu)->get();
                $skip += $numEtu;
            }


            foreach ($etudiant as $e) {
                $e->groupe()->save($g);
                $session = array(
                    'etudiant_id' => $e->etudiant_id,
                    'test_id' => $currentTest->test_id,
                    'username' => $e->nom,
                    'password' => $this->randomPassword(),

                );
                $s = Session::query()->create($session);
            }


        }


        return redirect()->route('profauth.test');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
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
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $test = array(
            'nom' => $request->nom,
            'note' => $request->note,
            'duree' => $request->duree,
            'salle' => $request->salle,
            'date' => $request->date,
            'discription' => $request->discription
        );
        $profid = Professeur::findOrFail($request->professeur_id)->first();
        Test::findOrFail($request->test_id)->update($test);
        return redirect()->route('create-test.index', $profid);
    }

    public function update1(Request $request)
    {
        $test = array(
            'nom' => $request->nom,
            'note' => $request->note,
            'duree' => $request->duree,
            'salle' => $request->salle,
            'date' => $request->date,
            'discription' => $request->discription
        );
        Test::find($request->test_id)->update($test);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(Request $test)
    {
        $deletetest = Test::findOrfail($test->test_id);
        $profid = Professeur::findOrFail($test->professeur_id)->first();
        $deletetest->delete();
        return redirect()->route('create-test.index', $profid);
    }

    public function import(Request $request)
    {

    }

    public function export_pdf($test_id)
    {
        // Fetch all customers from database
        $sessions = Session::query()->get()->where('test_id', '=', $test_id);
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('create-test.pdf', compact('sessions'));
        // If you want to store the generated pdf to the server then you can use the store function
        $pdf->save(storage_path() . '_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('pdf.test');
    }

    public function randomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

    public function index1($s)
    {
        $session = Session::find(intval($s));
        $tests = Test::query()->orderBy('test_id', 'asc');
        $data['s'] = $session;
        $data['t'] = $tests;
        return view('quiz.index')->with('data', $data);
    }

    public function index2($prof)
    {
        //$tests['tests'] = Test::OrderBy('test_id', 'asc')->paginate(10);
        //return redirect()->route('create-test.index');
        $professeur = Professeur::all();
        foreach ($professeur as $p) {
            if ($p->professeur_id == $prof)
                return view('create-test.index', ['p' => $p]);
        }

    }

    public function question($test_id, $session)
    {


        $test = Test::findOrfail($test_id);
        $qcms['qcms'] = $test->qcm;
        $binaires['binaires'] = $test->binaire;
        $text_libres['text_libre'] = $test->text_libre;

        return view('question.index', compact('qcms', 'test', 'binaires', 'text_libres', 'session', $test));


    }

    public function reponses($test)
    {
        //$text_libre = Text_libre::query()->where('test_id','=',$test)->get();
        $session = Session::query()->where('test_id', '=', $test)->get();
        return view('reponses.index', compact('session'));
        //return compact('text_libre');
    }


    public function setSession(Request $request)
    {
        if ($request->active == 0) {
            $sessions = Session::query()->where('test_id', '=', $request->test_id)->get();

            foreach ($sessions as $s) {
                $s1 = array(
                    'session_id' => $s->session_id,
                    'etudiant_id' => $s->etudiant_id,
                    'test_id' => $s->test_id,
                    'username' => $s->username,
                    'password' => $s->password,
                    'active' => 1,
                );
                Session::findOrFail($s->session_id)->update($s1);
            }
        } else {
            $sessions = Session::query()->where('test_id', '=', $request->test_id)->get();
            foreach ($sessions as $s) {
                $s1 = array(
                    'session_id' => $s->session_id,
                    'etudiant_id' => $s->etudiant_id,
                    'test_id' => $s->test_id,
                    'username' => $s->username,
                    'password' => $s->password,
                    'active' => 0,
                );
                Session::findOrFail($s->session_id)->update($s1);
            }
        }
        return redirect()->back();
    }


}
