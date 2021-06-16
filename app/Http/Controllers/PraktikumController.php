<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Matakuliah;
use App\Models\Praktikan;
use App\Models\PraktikanPraktikum;
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

    public function kontrak(Matakuliah $matakuliah)
    {
        session(['slug_matakuliah' => $matakuliah->slug]);
        session(['bc3' => [
            'nama' => "$matakuliah->nama $matakuliah->kelas",
            'route' => 'praktikum.materi',
            'param' =>  $matakuliah->slug
        ]]);
        session(['menu' => 'kontrak']);
        $praktikum = $matakuliah->praktikum;
        return view('aslab.kontrak', compact('matakuliah', 'praktikum'));
    }

    public function kontrakAturan(Request $request)
    {
        $praktikum = Praktikum::find($request->id_praktikum);
        $praktikum->aturan = $request->aturan;
        $praktikum->save();
        session()->flash('success', "Aturan berhasil disimpan!");

        return back();
    }

    public function kontrakJadwal(Request $request)
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

    public function kontrakPersen(Request $request)
    {
        $praktikum = Praktikum::find($request->id_praktikum);
        $validated = $request->validate([
            'absen' => 'min:0|max:100',
            'tugas' => 'min:0|max:100',
            'uts' => 'min:0|max:100',
            'uas' => 'min:0|max:100',
        ]);

        $total = $validated['absen'] + $validated['tugas'] + $validated['uts'] + $validated['uas'];

        if ( $total != 100 && $total != 0) {
            session()->flash('danger', "Persentase nilai gagal disimpan!");
        } else {
            $praktikum->persentaseNilai->absen = $validated['absen'];
            $praktikum->persentaseNilai->tugas = $validated['tugas'];
            $praktikum->persentaseNilai->uts = $validated['uts'];
            $praktikum->persentaseNilai->uas = $validated['uas'];
            $praktikum->persentaseNilai->save();
            session()->flash('success', "Persentase nilai berhasil disimpan!");
        }

        return back();
    }

    public function nilai(Matakuliah $matakuliah)
    {
        session(['menu' => 'nilai']);
        $praktikum = $matakuliah->praktikum;

        return view('aslab.nilai', compact('matakuliah', 'praktikum'));
    }

    public function updateNilai(Request $request)
    {
        $praktikan = Praktikan::find($request->npm);

        $praktikan->praktikum()->updateExistingPivot($request->id_praktikum, [
            'nilai_absen' => $request->nilai_absen,
            'nilai_tugas' => $request->nilai_tugas,
            'nilai_uts' => $request->nilai_uts,
            'nilai_uas' => $request->nilai_uas,
        ]);

        return back();
    }

    public function jadwal(Matakuliah $matakuliah)
    {
        session(['menu' => 'jadwal']);
        $praktikum = $matakuliah->praktikum;
        $jadwal = Jadwal::where('status',1)->get();

        return view('aslab.jadwal', compact('matakuliah', 'praktikum', 'jadwal'));
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
