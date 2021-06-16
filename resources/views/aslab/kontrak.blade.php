@extends('layouts.app')

@section('parent-menu')
<x-parent-menu nama='{{ "$matakuliah->kd_mk $matakuliah->kelas" }}' link='aslab.praktikum'></x-parent-menu>
@endsection

@section('menu')
<x-menu-aslab></x-menu-aslab>
@endsection

@section('breadcrumb')
<x-breadcrumb></x-breadcrumb>
@endsection

@section('content')
<div class="container">
    @if (session()->has('success'))
    <div class="alert alert-success">
        {!! session()->get('success') !!}
    </div>
    @elseif (session()->has('danger'))
    <div class="alert alert-danger">
        {!! session()->get('danger') !!}
    </div>
    @endif
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 card-kontrak border-primary" data-toggle="modal" data-target="#modal-aturan">
                <div class="card-body d-flex justify-content-center">
                    <img src="{{ asset("img/aturan.png") }}" width="50%" alt="add file">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">ATURAN PRAKTIKUM</h5>
                </div>
            </div>
        </div>
        <x-modal-aturan praktikum="{{ $praktikum->id }}" aturan="{{ $praktikum->aturan }}"></x-modal-aturan>

        <div class="col-md-4">
            <div class="card mb-4 card-kontrak border-primary" data-toggle="modal" data-target="#modal-jadwal">
                <div class="card-body d-flex justify-content-center">
                    <img src="{{ asset("img/jadwal.png") }}" width="50%" alt="add file">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">JADWAL PRAKTIKUM</h5>
                </div>
            </div>
        </div>
        <x-modal-jadwal praktikum="{{ $praktikum->id }}" hari="{{ $praktikum->jadwal->hari }}"
            ruang="{{ $praktikum->jadwal->ruang }}" jamMulai="{{ $praktikum->jadwal->jam_mulai }}"
            jamAkhir="{{ $praktikum->jadwal->jam_akhir }}"></x-modal-jadwal>

        <div class="col-md-4">
            <div class="card mb-4 card-kontrak border-primary" data-toggle="modal" data-target="#modal-persen">
                <div class="card-body d-flex justify-content-center">
                    <img src="{{ asset("img/persen.png") }}" width="50%" alt="add file">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center">PERSENTASE NILAI</h5>
                </div>
            </div>
        </div>

        <x-modal-persen praktikum="{{ $praktikum->id }}" absen="{{ $praktikum->persentaseNilai->absen }}"
            tugas="{{ $praktikum->persentaseNilai->tugas }}" uts="{{ $praktikum->persentaseNilai->uts }}"
            uas="{{ $praktikum->persentaseNilai->uas }}"></x-modal-persen>

    </div>
</div>
@endsection

{{-- @section('script')
<script src="{{ asset('js/kontrak.js') }}"></script>
@endsection --}}
