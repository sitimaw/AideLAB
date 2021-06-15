@extends('layouts.app')

@section('parent-menu')
<x-parent-menu nama="{{ config('app.name', 'AideLAB') }}" link='/'></x-parent-menu>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }} {{ ucwords($url) }}</div>

                <div class="card-body">
                    @if (session('berhasil'))
                    <div class="alert alert-success" role='alert'>
                        {{ session('berhasil') }}
                    </div>
                    @elseif (session('gagal'))
                    <div class="alert alert-danger" role='alert'>
                        {{ session('gagal') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('login.' . $url) }}">
                        @csrf
                        @php
                        $id = $url=='aslab'? 'npm' : 'nip';
                        @endphp
                        <div class="form-group row">
                            <label for="{{ $id }}"
                                class="col-md-4 col-form-label text-md-right">{{ __($url=='aslab' ? 'NPM' : 'NIP') }}</label>

                            <div class="col-md-6">
                                <input id="{{ $id }}" type="text" class="form-control @error($id) is-invalid @enderror"
                                    name="{{ $id }}" value="{{ old($id) }}" required autocomplete="{{ $id }}" autofocus>

                                @error($id)
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                </div>
            </div>
        </div> --}}

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
                <a class="btn btn-link" href="{{ route('login.show', ['url' => $url=='aslab' ? 'dosen' : 'aslab']) }}">
                    {{ __('Login sebagai ' . ($url=='aslab' ? 'dosen' : 'aslab') . '?') }}
                </a>
                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
                </a>
                @endif --}}
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
