@extends('layouts.app')

@section('parent-menu')
<x-parent-menu nama="{{ config('app.name', 'AideLAB') }}" link='/'></x-parent-menu>
@endsection

@section('menu')
<ul class="navbar-nav ml-auto">
    <li class="nav-item active px-2 py-2">
        <a class="nav-link" style="letter-spacing: 2px">DAFTAR PRAKTIKUM<span class="sr-only">(current)</span></a>
    </li>
</ul>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('Hai Aslab!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
