<ul class="navbar-nav mr-auto menu-aidelab">
    <li class="nav-item active px-2 py-2">
        <a class="nav-link" href="{{ route('praktikum.materi', session('slug_matakuliah')) }}">
            Materi<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active px-2 py-2">
        <a class="nav-link" href="{{ route('praktikum.kontrak', session('slug_matakuliah')) }}">
            Kontrak<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active px-2 py-2">
        <a class="nav-link" href="{{ route('praktikum.nilai', session('slug_matakuliah')) }}">
            Nilai<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active px-2 py-2">
        <a class="nav-link" href="{{ route('praktikum.jadwal', session('slug_matakuliah')) }}">
            Jadwal<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active px-2 py-2">
        <a class="nav-link" href="#">Absensi<span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active px-2 py-2">
        <a class="nav-link" href="#">Roomchat<span class="sr-only">(current)</span></a>
    </li>
</ul>
