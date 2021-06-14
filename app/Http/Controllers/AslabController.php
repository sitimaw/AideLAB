<?php

namespace App\Http\Controllers;

use App\Models\Aslab;
use Illuminate\Http\Request;

class AslabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('aslab.index');
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
     * @param  \App\Models\Aslab  $aslab
     * @return \Illuminate\Http\Response
     */
    public function show(Aslab $aslab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aslab  $aslab
     * @return \Illuminate\Http\Response
     */
    public function edit(Aslab $aslab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aslab  $aslab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aslab $aslab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aslab  $aslab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aslab $aslab)
    {
        //
    }
}
