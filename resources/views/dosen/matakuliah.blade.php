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

                    <h5 class="display-5">Daftar Matakuliah</h5>
                    <ul class="list-group">
                        @foreach (Auth::guard('dosen')->user()->matakuliah as $mk)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $mk->nama . ' ' . $mk->kelas }}
                            <a href="{{ route('matakuliah.aslab', $mk->id) }}"
                                class="badge badge-primary badge-pill">Buka</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
