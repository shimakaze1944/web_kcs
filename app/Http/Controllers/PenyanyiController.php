<?php

namespace App\Http\Controllers;

use App\Models\penyanyi;
use Illuminate\Http\Request;

class PenyanyiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penyanyi = penyanyi::all();
        return view('penyanyi/index', compact('penyanyi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penyanyi.addPenyanyi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string',
            'genre' => 'required|unique:penyanyi',
            
        ]);

        penyanyi::create([
            'nama' => $request['nama'],
            'genre' => $request['genre'],
           
        ]);
        return redirect()->route('penyanyi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function show(penyanyi $penyanyi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function edit(penyanyi $penyanyi)
    {
        return view('penyanyi.editPenyanyi', compact('penyanyi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, penyanyi $penyanyi)
    {
        $request->validate([
            'nama' => 'required|string',
            'genre' => 'required|string',
            
        ]);

        $penyanyi->update($request->all());
        return redirect()->route('penyanyi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Residence  $residence
     * @return \Illuminate\Http\Response
     */
    public function destroy(penyanyi $penyanyi)
    {
        penyanyi::destroy($penyanyi->id);
        return redirect()->route('penyanyi.index');
    }
}
