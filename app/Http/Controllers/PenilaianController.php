<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Karyawan;
use App\Models\Kompetensi;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('index', [
            'penilaian' => Penilaian::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tambahpenilaian', [
            'kompetensi' => Kompetensi::all()
        ], ['karyawan' => Karyawan::all()
    ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $penilaian = new Penilaian;
        $penilaian->karyawan_id = $request->karyawan;
        $penilaian->kompetensi_id = $request->kompetensi;
        $penilaian->nilai = $request->nilai;
        $penilaian->save();
        return redirect()->route('penilaian.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penilaian $penilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('editpenilaian', [
            'penilaian' => Penilaian::find($id),
            'kompetensi' => Kompetensi::all(),
            'karyawan' => Karyawan::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $penilaian = Penilaian::find($id);
        $penilaian->karyawan_id = $request->karyawan;
        $penilaian->kompetensi_id = $request->kompetensi;
        $penilaian->nilai = $request->nilai;
        $penilaian->save();
        return redirect()->route('penilaian.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Penilaian::destroy($id);
        return redirect()->route('penilaian.index');
    }
}
