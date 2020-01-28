@extends('layouts.adminlte.layout')

@section('content')
<table class="table table-responive">
    <tr>
        <th>ID</th>
        <th>{{ $data->id }}</th>
    </tr>

    <tr>
        <th>Nama</th>
        <th>{{ $data->name}}</th>  
    </tr>

    <tr>
        <th>Phone Number</th>
        <th>{{ $data->phone_number}}</th>  
    </tr>
    <tr>
        <th>Username</th>
        <th>{{ $data->username}}</th>  
    </tr>
    <tr>
        <th>Email</th>
        <th>{{ $data->email}}</th>  
    </tr>
    <tr>
        <th>Gender</th>
        <th>{{ $data->gender}}</th>  
    </tr>
    <tr>
        <th>Address</th>
        <th>{{ $data->address}}</th>  
    </tr>
</table>
@endsection