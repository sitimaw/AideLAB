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
                <th class="align-middle text-center" rowspan="2" scope="col">NPM</th>
                <th class="align-middle text-center" rowspan="2" scope="col">Nama</th>
                <th class="align-middle text-center" colspan="8" scope="col">
                    Absen({{ $praktikum->persentaseNilai->absen }}%)</th>
                <th class="align-middle text-center" colspan="8" scope="col">
                    Tugas({{ $praktikum->persentaseNilai->tugas }}%)</th>
                <th class="align-middle text-center" rowspan="2" scope="col">
                    UTS({{ $praktikum->persentaseNilai->uts }}%)</th>
                <th class="align-middle text-center" rowspan="2" scope="col">
                    UAS({{ $praktikum->persentaseNilai->uas }}%)</th>
                <th class="align-middle text-center" rowspan="2" scope="col">
                    Nilai Akhir</th>
                <th class="align-middle text-center" rowspan="2" scope="col">
                    Aksi</th>
            </tr>
            <tr>
                <th class="align-middle text-center" scope="col">1</th>
                <th class="align-middle text-center" scope="col">2</th>
                <th class="align-middle text-center" scope="col">3</th>
                <th class="align-middle text-center" scope="col">4</th>
                <th class="align-middle text-center" scope="col">5</th>
                <th class="align-middle text-center" scope="col">6</th>
                <th class="align-middle text-center" scope="col">7</th>
                <th class="align-middle text-center" scope="col">8</th>
                <th class="align-middle text-center" scope="col">1</th>
                <th class="align-middle text-center" scope="col">2</th>
                <th class="align-middle text-center" scope="col">3</th>
                <th class="align-middle text-center" scope="col">4</th>
                <th class="align-middle text-center" scope="col">5</th>
                <th class="align-middle text-center" scope="col">6</th>
                <th class="align-middle text-center" scope="col">7</th>
                <th class="align-middle text-center" scope="col">8</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($praktikum->praktikan as $praktikan)
            <form id="form-nilai" action="{{ route('praktikum.nilai.update', session('slug_matakuliah')) }}"
                method="post">
                @csrf
                @method('patch')
                <input type="hidden" name="npm" value="{{ $praktikan->npm }}">
                <input type="hidden" name="id_praktikum" value="{{ $praktikum->id }}">
                <tr>
                    <th scope="row">{{ $praktikan->npm }}</th>
                    <td>{{ $praktikan->nama }}</td>

                    @php $i=0; $total_absen=0; @endphp
                    @foreach (json_decode($praktikan->pivot->nilai_absen) as $nilai_absen)
                    @php $i++; $total_absen+=(int)$nilai_absen; @endphp
                    <td><input type="text" name="nilai_absen[{{ $i }}]" size="3" value="{{ $nilai_absen }}"></td>
                    @endforeach

                    @php $j=0; $total_tugas=0; @endphp
                    @foreach (json_decode($praktikan->pivot->nilai_tugas) as $nilai_tugas)
                    @php $j++; $total_tugas+=(int)$nilai_tugas; @endphp
                    <td><input type="text" name="nilai_tugas[{{ $j }}]" size="3" value="{{ $nilai_tugas }}"></td>
                    @endforeach

                    <td><input type="text" name="nilai_uts" size="3" value="{{ $praktikan->pivot->nilai_uts }}">
                    </td>
                    <td><input type="text" name="nilai_uas" size="3" value="{{ $praktikan->pivot->nilai_uas }}">
                    </td>
                    @php
                    $nilai_akhir = ((($praktikum->persentaseNilai->absen/100) * ($total_absen/$i)) +
                    (($praktikum->persentaseNilai->tugas/100) * ($total_tugas/$j)) +
                    (($praktikum->persentaseNilai->uts/100) * $praktikan->pivot->nilai_uts) +
                    (($praktikum->persentaseNilai->uas/100) * $praktikan->pivot->nilai_uas));
                    @endphp
                    <td>{{ $nilai_akhir }}</td>
                    <td><button type="submit" class="btn btn-primary">Update</button></td>
                </tr>
            </form>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
