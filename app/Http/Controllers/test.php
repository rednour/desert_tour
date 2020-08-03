<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;

class test extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listour=Tour::all();
        return view('agence.tours.index',['list'=>$listour]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agence.tours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tour= new Tour();
        $tour->Nom_tour=$request->input('Nom_tour');
        $tour->langue=$request->input('langue');
        $tour->nmbr_jour=$request->input('nmbr_jour');
        $tour->traget=$request->input('lieu');
        $tour->agence_id=1;
        $tour->save();
        return redirect('tours');
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
        $tour=Tour::find($id);
        return view('agence.tours.edit',['tou'=>$tour]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $nvtou=Tour::find($id);
        $nvtou->Nom_tour=$request->input('Nom_tour');
        $nvtou->langue=$request->input('langue');
        $nvtou->nmbr_jour=$request->input('nmbr_jour');
        $nvtou->traget=$request->input('lieu');
        $nvtou->save();
        return redirect('tours');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
