@extends('layouts.adminlte.layout')

@section('content')
<table class="table table-responive">
    <tr>
        <th>ID</th>
        <th>{{ $data->id }}</th>
    </tr>

    <tr>
        <th>Parent</th>
        <th>{{ @$data->parent->name }}</th>
    </tr>

    <tr>
        <th>Nama</th>
        <th>{{ $data->name }}</th>
    </tr>
</table>
@endsection