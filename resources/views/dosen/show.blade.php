@extends('layouts.app')

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
                            <a href="#" class="badge badge-primary badge-pill">Pilih</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="card-footer">
                    <button onclick="#" type="button" class="btn btn-primary">Kembali</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
