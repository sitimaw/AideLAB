<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Matakuliah;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Matakuliah $matakuliah)
    {
        $materi = $matakuliah->praktikum->materi;
        return view('dosen.materi', compact('matakuliah', 'materi'));
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
        $file_materi = $request->file('file');
        $extension_file = $file_materi->extension();
        $ukuran_file = $file_materi->getSize() / 1024;

        $str_random = Str::random(5);
        $nama_file = str_replace(' ', '_', $request->judul) . "-$str_random.$extension_file";
        $slug = Str::slug($request->judul) . '-' . $str_random;

        $data['id_praktikum'] = $request->id_praktikum;
        $data['judul'] = $request->judul;
        $data['slug'] = $slug;
        $data['nama_file'] = $nama_file;
        $data['ukuran_file'] = $ukuran_file;
        $data['extension_file'] = $extension_file;
        $data['path_file'] = $file_materi->storeAs('materi', $nama_file);

        Materi::create($data);
        session()->flash('success', "Materi <strong>$request->judul</strong> berhasil diupload!");

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Matakuliah $matakuliah, $slug)
    {
        $materi = Materi::where('slug', $slug)->first();
        return view('dosen.detailMateri', compact('matakuliah', 'materi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matakuliah $matakuliah, $slug)
    {
        $materi = Materi::where('slug', $slug)->first();
        $str_random = Str::random(5);
        $slug = Str::slug($request->judul) . '-' . $str_random;
        $data = $request->all();
        
        $data['slug'] = $slug;
        $data['id_praktikum'] = $request->id_praktikum;
        $data['judul'] = $request->judul;

        if ($request->file('file')) {
            Storage::delete($materi->path_file);
            $file_materi = $request->file('file');
            $extension_file = $file_materi->extension();
            $ukuran_file = $file_materi->getSize() / 1024;
            $nama_file = str_replace(' ', '_', $request->judul) . "-$str_random.$extension_file";

            $data['nama_file'] = $nama_file;
            $data['ukuran_file'] = $ukuran_file;
            $data['extension_file'] = $extension_file;
            $data['path_file'] = $file_materi->storeAs('materi', $nama_file);
        }

        $materi->update($data);

        session()->flash('success', "Materi <strong>$materi->judul</strong> berhasil diupdate!");

        return redirect("dosen/$matakuliah->slug/$materi->slug");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        //
    }

    public function download(Matakuliah $matakuliah ,$slug)
    {
        $materi = Materi::where('slug', $slug)->first();
        return Storage::download($materi->path_file);
    }
}
