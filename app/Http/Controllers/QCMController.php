<?php

namespace App\Http\Controllers;

use App\departement;
use App\Option;
use App\Test;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\QCM;

class QCMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       return view('create-question.index');
    }
    public function index1(Request $request)
    {
        return view('create-qcm.index');
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
        $i=0;
        $question =$request->question;
        $options =$request->input('option_text');
        $nbrs =$request->input('hidden');

        $nbrs2=array($nbrs);
        $point =$request->input('point');
        $QCM = array(
            'question_text' => $question,

            'note'      =>'1',
            'test_id'   =>'1' ,
            'note'=>1
        );
        $id=qcm::create($QCM);

   for( $i =1 ;$i<=count($nbrs);$i++){

        $test= in_array($i+0,$point);
        if($test==true){
            $option = array(
                'option_text' => $options[$i-1],
                'question_id' => $id->question_id,
                 'point'      =>'1'
            );
            option::create($option);

        }
       if($test==false){
           $option = array(
               'option_text' => $options[$i-1],
               'question_id' => $id->question_id,
               'point'      =>'0'
           );
           option::create($option);


       }


   }

$count =count($nbrs);

   return compact('count');
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
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $QCM)
    {

    }

    public function import(Request $request){

    }


}
