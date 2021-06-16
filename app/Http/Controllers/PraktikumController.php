<?php

namespace App\Http\Controllers;

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
