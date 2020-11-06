<?php

namespace App\Http\Controllers;

use App\Models\lagu;
use App\Models\penyanyi;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lagu = lagu::all();
        return view('lagu/index', compact('lagu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penyanyi = penyanyi::all();
        return view('lagu.addLagu', compact('penyanyi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lagu' => 'required|string',
           
            'tanggal_rilis' => 'required|string',
            'residential_area' => 'required|string',
        ]);

        lagu::create([
            'lagu' => $request['lagu'],
           
            'tanggal_rilis' => $request['tanggal_rilis'],
            'residential_area' => $request['residential_area'],
        ]);
        return redirect()->route('lagu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(lagu $lagu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(lagu $lagu)
    {
        $penyanyi = penyanyi::all();
        return view('lagu.editLagu', compact('lagu', 'penyanyi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lagu $lagu)
    {
        $request->validate([
            'lagu' => 'required|string',
            
            'tanggal_rilis' => 'required|string',
            'residential_area' => 'required|string',
        ]);

        $lagu->update($request->all());
        return redirect()->route('lagu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(lagu $lagu)
    {
        lagu::destroy($lagu->id);
        return redirect()->route('lagu.index');
    }
}
