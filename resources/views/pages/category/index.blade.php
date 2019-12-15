@extends('layouts.adminlte.layout')

@section('content')

<a href="{{ route($view. '.create') }}" class="btn btn-primary">Tambah</a>

<table class="table table-responive">
    <tr>
        <th>ID</th>
        <th>Parent ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach ($datas as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ @$data->parent->name }}</td>
        <td>{{ $data->name }}</td>

        @include('pages.' . $view . '.action')
    </tr>
    @endforeach
</table>
@endsection