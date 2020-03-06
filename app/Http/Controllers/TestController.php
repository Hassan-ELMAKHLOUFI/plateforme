<?php

namespace App\Http\Controllers;


use App\Test;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        return view('test.index', $tests);
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
            'date' => $request->date
        );


        Test::create($test);
        return redirect()->route('test.index');
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
    public function update(Request $request)
    {
        $test = array([
            'nom' => $request->nom,
            'note' => $request->note,
            'duree' => $request->duree,
            'salle' => $request->salle,
            'date' => $request->date
        ]);

        Test::findOrFail($request->test_id)->update($test);
        return redirect()->route('test.index');
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
        $deletetest->delete();
        return redirect()->route('test.index');
    }

    public function import(Request $request)
    {

    }
}
