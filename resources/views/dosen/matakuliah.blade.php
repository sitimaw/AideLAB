@extends('layouts.app')

@section('parent-menu')
<x-parent-menu nama="{{ config('app.name', 'AideLAB') }}" link='/'></x-parent-menu>
@endsection

@section('menu')
<ul class="navbar-nav ml-auto">
    <li class="nav-item active px-2 py-2">
        <a class="nav-link" style="letter-spacing: 2px">DAFTAR MATAKULIAH<span class="sr-only">(current)</span></a>
    </li>
</ul>
@endsection

@section('breadcrumb')
<x-breadcrumb></x-breadcrumb>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            @foreach (Auth::guard('dosen')->user()->matakuliah as $mk)
                <div class="card card-horizontal my-3"
                    onclick="location.href='{{ route('matakuliah.aslab', $mk->slug) }}'">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h4>
                            {{ $mk->nama . ' ' . $mk->kelas }}
                        </h4>
                        <h4>
                            {{ $mk->kd_mk }}
                        </h4>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
