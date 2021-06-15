@extends('layouts.app')

@section('parent-menu')
<x-parent-menu nama='{{ "$matakuliah->kd_mk $matakuliah->kelas" }}' link='dosen.matakuliah'></x-parent-menu>
@endsection

@section('menu')
<x-menu-dosen></x-menu-dosen>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Materi') }}</div>

                <div class="card-body">
                    {{ session('slug_matakuliah') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
