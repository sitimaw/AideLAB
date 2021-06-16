<nav class="navbar navbar-expand-md navbar-dark bg-aidelab shadow-sm py-0">
    <div class="container">
        @yield('parent-menu')
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @yield('menu')

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if (Auth::guard('dosen')->check())
                    <li class="nav-item" style="cursor: pointer">
                        <a class="nav-link" data-toggle="modal" data-target="#modal-auth">{{ Auth::guard('dosen')->user()->nama }}<span class="sr-only">(current)</span></a>
                    </li>
                    <x-modal-profil status="NIP" :auth="auth('dosen')->user()"></x-modal-profil>
                @elseif(Auth::guard('aslab')->check())
                    <li class="nav-item" style="cursor: pointer">
                        <a class="nav-link" data-toggle="modal" data-target="#modal-auth">{{ Auth::guard('aslab')->user()->nama }}<span class="sr-only">(current)</span></a>
                    </li>
                    <x-modal-profil status="NPM" :auth="auth('aslab')->user()"></x-modal-profil>
                @else
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login.show', ['url' => 'aslab']) }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @endif
            </ul>
        </div>
    </div>
</nav>

<x-modal-auth></x-modal-auth>