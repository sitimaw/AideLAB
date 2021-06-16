<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Matakuliah;
use App\Models\Praktikum;
use Illuminate\Http\Request;

class PraktikumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->forget('slug_praktikum');
        session()->forget('bc3');
        return view('aslab.praktikum');
    }

    public function materi(Matakuliah $matakuliah)
    {
        session(['slug_matakuliah' => $matakuliah->slug]);
        session(['bc3' => [
            'nama' => "$matakuliah->nama $matakuliah->kelas",
            'route' => 'praktikum.materi',
            'param' =>  $matakuliah->slug
        ]]);
        return view('aslab.materi', compact('matakuliah'));
    }

    public function kontrak(Matakuliah $matakuliah)
    {
        $praktikum = $matakuliah->praktikum;
        return view('aslab.kontrak', compact('matakuliah', 'praktikum'));
    }

    public function aturan(Request $request)
    {
        $praktikum = Praktikum::find($request->id_praktikum);
        $praktikum->aturan = $request->aturan;
        $praktikum->save();
        session()->flash('success', "Aturan berhasil disimpan!");

        return back();
    }

    public function jadwal(Request $request)
    {
        $praktikum = Praktikum::find($request->id_praktikum);
        $jadwal = Jadwal::where([
            ['hari', $request->hari],
            ['ruang', $request->ruang],
            ['jam_mulai', explode("|",$request->jam)[0]],
            ['jam_akhir', explode("|",$request->jam)[1]],
        ])->first();

        if ($jadwal->status == 1) {
            session()->flash('danger', "Jadwal gagal disimpan!");
        } else {
            $praktikum->jadwal->status = 0;
            $praktikum->jadwal->save();
            
            $praktikum->id_jadwal = $jadwal->id;
            $praktikum->save();
            $praktikum = Praktikum::find($request->id_praktikum);
            
            // dd($praktikum->jadwal->id);
            $praktikum->jadwal->status = 1;
            $praktikum->jadwal->save();
            session()->flash('success', "Jadwal berhasil disimpan!");
        }

        return back();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function show(Praktikum $praktikum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function edit(Praktikum $praktikum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Praktikum $praktikum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Praktikum  $praktikum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Praktikum $praktikum)
    {
        //
    }
}
