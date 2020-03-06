<?php

namespace App\Http\Controllers;

use App\Module;
use App\niveau;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $niveaux['niveaux'] = niveau::OrderBy('niveau_id', 'asc')->paginate(10);
        return view('niveau.index', $niveaux);
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
        $niveau = array(
        'nom' => $request->nom
    );

        niveau::create($niveau);
        return redirect()->route('niveau.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(niveau $niveau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(niveau $niveau)
    {

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
        $niveau = array(
            'nom' => $request->nom,
        );

        Niveau::findOrfail($request->niveau_id)->update($niveau);
        return redirect()->route('niveau.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $niveau)
    {
        $delete = $niveau->all();
        $deleteniveau = Niveau::findOrfail($niveau->niveau_id);
        $deleteniveau->delete();
        return redirect()->route('niveau.index');
    }

    public function import(Request $request){
        Excel::import(new Niveau ,request()->file('file'));
        return back();
    }
}
