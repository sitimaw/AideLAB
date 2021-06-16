<ul class="navbar-nav mr-auto menu-aidelab">
    <li class="nav-item {{ session('menu')=='aslab' ? 'active' : '' }} px-2 py-2">
        <a class="nav-link" href="{{ route('matakuliah.aslab', session('slug_matakuliah')) }}">List Aslab<span
                class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item {{ session('menu')=='terpilih' ? 'active' : '' }} px-2 py-2">
        <a class="nav-link" href="{{ route('matakuliah.aslabTerpilih', session('slug_matakuliah')) }}">Aslab
            Terpilih<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item {{ session('menu')=='materi' ? 'active' : '' }} px-2 py-2">
        <a class="nav-link" href="{{ route('matakuliah.materi', session('slug_matakuliah')) }}">Materi<span
                class="sr-only">(current)</span></a>
    </li>
    {{-- <li class="nav-item {{ session('menu')=='roomchat' ? 'active' : '' }} px-2 py-2">
    <a class="nav-link" href="#">Roomchat<span class="sr-only">(current)</span></a>
    </li> --}}
</ul>
