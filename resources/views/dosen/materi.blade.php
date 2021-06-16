@extends('layouts.app')

@section('parent-menu')
<x-parent-menu nama='{{ "$matakuliah->kd_mk $matakuliah->kelas" }}' link='dosen.matakuliah'></x-parent-menu>
@endsection

@section('menu')
<x-menu-dosen></x-menu-dosen>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach ($materi as $m)
            <div class="col-md-3">
                <div class="card mb-4 card-materi border-primary" 
                     onclick="location.href='{{ route('matakuliah.materi.detail', ['matakuliah' => session('slug_matakuliah'), 'slug' => $m->slug]) }}'">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                        @switch($m->extension_file)
                            @case('pdf')
                                <img src="{{ asset("img/pdf.png") }}" width="90%" alt="file pdf" title="{{ $m->nama_file }}">
                                @break
                            @case('doc')
                            @case('docx')
                                <img src="{{ asset("img/doc.png") }}" width="90%" alt="file doc" title="{{ $m->nama_file }}">
                                @break
                            @case('ppt')
                            @case('pptx')
                                <img src="{{ asset("img/ppt.png") }}" width="90%" alt="file ppt" title="{{ $m->nama_file }}">
                                @break
                            @case('zip')
                            @case('rar')
                                <img src="{{ asset("img/archive.png") }}" width="90%" alt="file archive" title="{{ $m->nama_file }}">
                                @break
                            @case('csv')
                            @case('xls')
                            @case('xlsx')
                                <img src="{{ asset("img/xls.png") }}" width="90%" alt="file xls" title="{{ $m->nama_file }}">
                                @break
                            @default
                                <img src="{{ asset("img/unknown.png") }}" width="90%" alt="file unknown">
                        @endswitch
                        </div>
                        {{ Str::limit($m->judul, 50) }}
                    </div>
                    <div class="card-body">
                        <small class="text-secondary p-0">
                            Diupload {{ $m->created_at->diffForHumans() }}
                        </small>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-md-3">
            <div class="card mb-4 card-materi border-primary" data-toggle="modal" data-target="#modal-materi">
                <div class="card-body">
                    <img src="{{ asset("img/add-2.png") }}" width="100%" alt="add file">
                    <h5 class="card-title text-center">Tambah Materi</h5>
                </div>
            </div>
        </div>
    </div>
    <x-modal-materi praktikum="{{ $matakuliah->praktikum->id }}" header="Tambah Materi" tombol="Simpan" link="matakuliah.materi.store" param="session('slug_matakuliah')"></x-modal-materi>
</div>
@endsection
