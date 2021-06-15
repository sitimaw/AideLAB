<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\Praktikum;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session()->forget('slug_matakuliah');
        return view('dosen.matakuliah');
    }

    public function showAslab(Matakuliah $matakuliah)
    {
        session(['slug_matakuliah' => $matakuliah->slug]);
        return view('dosen.showAslab', compact('matakuliah'));
    }
    
    public function showAslabTerpilih(Matakuliah $matakuliah)
    {
        $aslab = $matakuliah->aslabTerpilih;
        return view('dosen.showAslabTerpilih', compact('matakuliah', 'aslab'));
    }

    public function setStatusAslab(Request $request)
    {
        $matakuliah = Matakuliah::find($request->matakuliah);
        $matakuliah->aslab()->updateExistingPivot($request->aslab, [
            'status' => $request->status,
        ]);
       
        $praktikum = $matakuliah->praktikum;
 
        if($request->status == 1) {
            $praktikum->aslab()->attach($request->aslab);
        } else {
            $praktikum->aslab()->detach($request->aslab);
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
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matakuliah $matakuliah)
    {
        //
    }
}
