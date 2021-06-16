@extends('layouts.app')

@section('parent-menu')
<x-parent-menu nama='{{ "$matakuliah->kd_mk $matakuliah->kelas" }}' link='dosen.matakuliah'></x-parent-menu>
@endsection

@section('menu')
    @if (Auth::guard('dosen')->check())
        <x-menu-dosen></x-menu-dosen>
    @else
        <x-menu-aslab></x-menu-aslab>
    @endif
@endsection

@section('content')
<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success">
            {!! session()->get('success') !!}
        </div>
    @endif
    <h1 style="color:#0A4158;">{{ $materi->judul }}</h1>

    <div class="d-flex justify-content-between mt-3">
        <div class="text-white">
            <a href="{{ route('matakuliah.materi.download', ['matakuliah' => session('slug_matakuliah'), 'slug' => $materi->slug]) }}" class="btn btn-success">download</a>
            @auth('dosen')    
                <a class="btn btn-warning" data-toggle="modal" data-target="#modal-materi">edit</a>
                <a class="btn btn-danger" data-toggle="modal" data-target="#modal-confirm">delete</a>
            @endauth
        </div>
        <div class="text-secondary float-right">
            Diupload {{ $materi->created_at->format('d M, Y') }}
        </div>
    </div>

    {{-- <img class="rounded-circle ml-3" src="{{ $materi->user->gravatar() }}" width="45" alt=""> --}}

    <hr>

    @switch($materi->extension_file)
        @case('pdf')
            <div class="d-flex float-right mb-3">
                <div class="btn-group btn-group-toggle">
                    <label class="btn btn-secondary active">
                      <input type="radio" name="detail" id="option1"> {{ $materi->nama_file }}
                    </label>
                    <label class="btn btn-secondary active">
                      <input type="radio" name="detail" id="option2"> {{ $materi->ukuran_file }} kb</div>
                    </label>
                </div>
            </div>
            <div class="container">
                <iframe class="mb-3" src="{{ asset("storage/" . $materi->path_file) }}" width="100%" height="1200px" frameborder="0"></iframe>
            </div>
            @break
        @default
            <div class="d-flex align-items-center justify-content-center">
                @switch($materi->extension_file)
                    @case('doc')
                    @case('docx')
                        <img src="{{ asset("img/doc.png") }}" alt="file doc" title="{{ $materi->nama_file }}">
                        @break
                    @case('ppt')
                    @case('pptx')
                        <img src="{{ asset("img/ppt.png") }}" alt="file ppt" title="{{ $materi->nama_file }}">
                        @break
                    @case('zip')
                    @case('rar')
                        <img src="{{ asset("img/archive.png") }}" alt="file archive" title="{{ $materi->nama_file }}">
                        @break
                    @case('csv')
                    @case('xls')
                    @case('xlsx')
                        <img src="{{ asset("img/xls.png") }}" alt="file xls" title="{{ $materi->nama_file }}">
                        @break
                    @default
                        <img src="{{ asset("img/unknown.png") }}" alt="file unknown"></img>
                @endswitch
            </div>
            <div class="d-flex justify-content-center mb-3">
                <div class="btn-group btn-group-toggle">
                    <label class="btn btn-secondary active">
                      <input type="radio" name="detail" id="option1" checked> {{ $materi->nama_file }}
                    </label>
                    <label class="btn btn-secondary active">
                      <input type="radio" name="detail" id="option2"> {{ $materi->ukuran_file }} kb</div>
                    </label>
                </div>
            </div>
    @endswitch
    <x-modal-materi praktikum="{{ $matakuliah->praktikum->id }}" header="Edit Materi" tombol="Ubah" link="matakuliah.materi.update" :param="['matakuliah' => session('slug_matakuliah'), 'slug' => $materi->slug]" :judul="$materi->judul" edit="true"></x-modal-materi>    
    <x-modal-confirm pesan="Apakah anda yakin ingin menghapus materi ini?" delete="true" :slug="$materi->slug"></x-modal-materi>    
</div>
@endsection
