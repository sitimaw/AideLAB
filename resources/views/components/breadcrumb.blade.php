<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('/') }}">{{ session('bc1') }}</a></li>
        <li class="breadcrumb-item">
            <a @if(session()->has('bc3')) href="{{ route(session('bc2')['route']) }}" @endif>
                {{ session('bc2')['nama'] }}</a>
        </li>

        @if(session()->has('bc3'))
        <li class="breadcrumb-item">
            <a @if(session()->has('bc4')) href="{{ route(session('bc3')['route']) }}" @endif>
                {{ session('bc3')['nama'] }}
            </a>
        </li>
        @endif

        @if(session()->has('bc4'))
        <li class="breadcrumb-item">{{ session('bc4') }}</li>
        @endif
    </ol>
</nav>
