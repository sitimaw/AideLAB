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
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h5 class="display-5">Daftar Aslab</h5>
                    <ul class="list-group">
                        @foreach ($matakuliah->aslab as $al)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $al->nama }}
                            <form action="{{ route('matakuliah.statusAslab') }}" method="post">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="matakuliah" value="{{ $matakuliah->id }}">
                                <input type="hidden" name="aslab" value="{{ $al->npm }}">
                                @if($al->pivot->status == false)
                                <input type="hidden" name="status" value=1>
                                <button type="submit" class="badge badge-primary badge-pill">Pilih</button>
                                @else
                                <input type="hidden" name="status" value=0>
                                <button type="submit" class="badge badge-danger badge-pill">Batal Pilih</button>
                                @endif
                            </form>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
