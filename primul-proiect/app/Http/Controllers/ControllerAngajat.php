<?php

namespace App\Http\Controllers;

use App\Models\Angajat;
use Illuminate\Http\Request;

class ControllerAngajat extends Controller
{

    public function dashboard()
    {
        return view('angajati.dashboard');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $angajati = Angajat::all();
        return view('angajati.index', compact('angajati'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('angajati.create');
        
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
            'nume' => 'required',
            'prenume' => 'required',
            'phone' => 'nullable',
            'email' => 'required|email',
        ]);
        Angajat::create($request->all());
        return redirect()->route('angajati.index')->with('success', 'Angajat adaugat cu succes!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Angajat $angajati)
    {
        return view('angajati.show', compact('angajati'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Angajat $angajati)
    {
        return view('angajati.edit', compact('angajati'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Angajat $angajat)
    {
        $request->validate([
            'nume' => 'required',
            'email' => 'required'
        ]);
        $angajat->update($request->all());
        return redirect()->route('angajati.index')->with('success', 'Angajat actualizat!');

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
