<?php

namespace App\Http\Controllers;

use App\binaire;
use App\Option;
use App\Session;
use Illuminate\Http\Request;




use App\Test;
use App\QCM;
use Illuminate\Support\Facades\DB;


class question extends Controller
{

    public function index()
    {

    }

    public function index2($test_id)
    {
            $test['test'] = test::findOrfail($test_id);
            return view('create-question.index', compact('test'));

    }
    public function index1(Request $request)
    {
        return view('create-qcm.index');
    }
    public function select ($test_id){
        $test =test::find($test_id);
        return view ('select-question.index',compact('test'));

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreSelected(Request $request){
        $qcms['qcms'] = qcm::find(array_values($request->input('qcm')));
        if($request->input('bin')!= null)
        $binaires = binaire::find(array_values($request->input('bin')));
        foreach ($qcms['qcms']  as $qcm){
            $qcm->test_id =$request->test_id ;
            $qc =array(
               'question_text'=>$qcm->question_text,
               'note'=>$qcm->note,
               'test_id'=>$qcm->test_id


            );
           $id= qcm::create($qc);
            $options=DB::table('option')->where('question_id',$qcm->question_id)->get();

            foreach($options as $option ){
                $option->question_id=$id->question_id ;
                $opt =array(

                    'point'=>$option->point,
                    'question_id'=>$option->question_id,
 'option_text'=> $option->option_text

                );

                Option::create($opt);
            }

        }

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
    public function store1(Request $request)
    {
        $question =$request->question;
        $test_id=$request->test_id;
        $choice =$request->choice ;
        $question=array(
            'question_text'=> $question,
            'test_id' =>$test_id,
            'note' => '1'
        );
        $id= Binaire::create($question);
        if($choice=='vrai') {
            $option = array(
                'option_text' => 'vrai',

                'binaire_id' => $id->binaire_id ,
                'point' => '1'
            );
            option::create($option);
            $option1 = array(
                'option_text' => 'false',

                'binaire_id' => $id->binaire_id ,
                'point' => '0'
            );
            option::create($option1);
        }
        if($choice=='faux') {
            $option = array(
                'option_text' => 'false',

                'binaire_id' => $id->binaire_id ,
                'point' => '1'
            );
            option::create($option);
            $option1 = array(
                'option_text' => 'true',
                'binaire_id' => $id->binaire_id ,
                'point' => '0'
            );
            option::create($option1);
        }
        return view('depatement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\binaire  $binaire
     * @return \Illuminate\Http\Response
     */
    public function show(binaire $binaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\binaire  $binaire
     * @return \Illuminate\Http\Response
     */
    public function edit(binaire $binaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\binaire  $binaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, binaire $binaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\binaire  $binaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(binaire $binaire)
    {
        //
    }
}
