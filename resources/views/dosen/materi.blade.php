@extends('layouts.app')

@section('parent-menu')
<x-parent-menu nama='{{ "$matakuliah->kd_mk $matakuliah->kelas" }}' link='dosen.matakuliah'></x-parent-menu>
@endsection

@section('menu')
<x-menu-dosen></x-menu-dosen>
@endsection

@section('breadcrumb')
<x-breadcrumb></x-breadcrumb>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @foreach ($materi as $m)
        <div class="col-md-3">
            <div class="card mb-4 card-materi border-primary"
                onclick="location.href='{{ route('matakuliah.materi.detail', ['matakuliah' => session('slug_matakuliah'), 'materi' => $m->id]) }}'">
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
                        <img src="{{ asset("img/archive.png") }}" width="90%" alt="file archive"
                            title="{{ $m->nama_file }}">
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

    <!-- Modal -->
    <div class="modal fade" id="modal-materi" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-aidelab">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Materi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('matakuliah.materi.store', session('slug_matakuliah')) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="id_praktikum" value="{{ $matakuliah->praktikum->id }}">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                                placeholder="Masukkan judul materi">
                        </div>
                        <div class="form-group">
                            <label for="file">Upload Materi</label>
                            <input type="file" class="form-control-file" id="file" name="file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
