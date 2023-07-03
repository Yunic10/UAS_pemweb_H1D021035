<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('tambahkompetensi', [
            'kompetensi' => Kompetensi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tambahkompetensi', [
            'kompetensi' => Kompetensi::all()
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $kompetensi = new Kompetensi;
        $kompetensi->kompetensi = $request->kompetensi;
        $kompetensi->save();
        return redirect()->route('penilaian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kompetensi $kompetensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kompetensi $kompetensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kompetensi $kompetensi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Kompetensi::destroy($id);
        return redirect()->route('penilaian.index');
    }
}
