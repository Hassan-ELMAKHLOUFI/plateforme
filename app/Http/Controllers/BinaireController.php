<?php

namespace App\Http\Controllers;

use App\binaire;
use App\option;
use App\Test;
use Illuminate\Http\Request;

class BinaireController extends Controller
{

    public function index()
    {
        return view('create-binaire.index');
    }
    public function index1($test_id)
    {
        $test=test::find($test_id);
        return view('create-binaire.index',compact('test'));
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
       return redirect()->back();
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
