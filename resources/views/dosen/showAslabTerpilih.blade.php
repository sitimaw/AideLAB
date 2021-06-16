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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="display-5">Daftar Aslab Terpilih</h2>
            @foreach ($aslab as $al)
                <ul class="list-group my-2">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $al->nama }}
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection
