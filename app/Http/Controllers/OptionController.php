<?php

namespace App\Http\Controllers;

use App\binaire;
use App\option;
use App\departement;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

    }

    public function index1($binaire_id)
    {
        $options['options']=DB::table('option')->where('binaire_id', $binaire_id)->get();
      return view('option.index',compact('options'));
    }
    public function index2($question_id)
    {
        $options['options']=DB::table('option')->where('question_id', $question_id)->get();
        return view('option.indexQCM',compact('options'));
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
        if($request->question_id!=null){
        $option = array(


            'option_text' => $request->option_text,
            'point' => $request->point,
            'question_id' => $request->question_id,


        );
        }else{
            $option = array(


                'option_text' => $request->option_text,
                'point' => $request->point,
                'binaire_id' => $request->binaire_id,


            );
        }


        option::findOrfail($request->option_id)->update($option);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $option)
    {
        $delete = $option->all();
        $deleteoption = option::find($option->option_id);
        $deleteoption->delete();
        return redirect()->back();
    }

    public function import(Request $request){

    }
}
