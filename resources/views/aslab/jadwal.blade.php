@extends('layouts.app')

@section('parent-menu')
<x-parent-menu nama='{{ "$matakuliah->kd_mk $matakuliah->kelas" }}' link='aslab.praktikum'></x-parent-menu>
@endsection

@section('menu')
<x-menu-aslab></x-menu-aslab>
@endsection

@section('breadcrumb')
<x-breadcrumb></x-breadcrumb>
@endsection

@section('content')
<div class="container-fluid">

    <table class="table table-bordered table-hover">
        <thead class="table-active">
            <tr>
                <th class="align-middle text-center" rowspan="2" scope="col">HARI</th>
                <th class="align-middle text-center" colspan="3" scope="col">JAM</th>
                <th class="align-middle text-center" rowspan="2" scope="col">KODE</th>
                <th class="align-middle text-center" rowspan="2" scope="col">PRAKTIKUM</th>
                <th class="align-middle text-center" rowspan="2" scope="col">RUANGAN</th>
                <th class="align-middle text-center" rowspan="2" scope="col">ASLAB</th>
            </tr>
            <tr>
                <th class="align-middle text-center" scope="col">MULAI</th>
                <th class="align-middle text-center" scope="col">-</th>
                <th class="align-middle text-center" scope="col">SELESAI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jadwal as $j)
            <tr>
                <td class="align-middle">{{ $j->hari }}</td>
                <td class="align-middle">{{ $j->jam_mulai }}</td>
                <td class="align-middle">-</td>
                <td class="align-middle">{{ $j->jam_akhir }}</td>
                <td class="align-middle">{{ $j->praktikum->matakuliah->kd_mk }}</td>
                <td class="align-middle">{{ $j->praktikum->matakuliah->nama . ' ' . $j->praktikum->matakuliah->kelas }}
                </td>
                <td class="align-middle">{{ $j->ruang }}</td>
                <td class="align-middle">
                    @foreach ($j->praktikum->aslab as $aslab)
                    {{ $aslab->nama }}<br>
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
