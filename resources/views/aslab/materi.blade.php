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
<div class="container">
    <div class="row">
        materi
    </div>
</div>
@endsection
