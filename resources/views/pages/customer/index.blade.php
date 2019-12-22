@extends('layouts.adminlte.layout')

@section('content')

<a href="{{ route($view. '.create') }}" class="btn btn-primary">Tambah Data</a>


<table class="table table-responive">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Username</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Addres</th>
        <th>Action</th>
    </tr>
    @foreach ($datas as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->phone_number }}</td>
        <td>{{ $data->username }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->gender }}</td>
        <td>{{ $data->address }}</td>

        @include('pages.customer.action')
    </tr>
    @endforeach
</table>
@endsection