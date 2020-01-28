@extends('layouts.adminlte.layout')

@section('content')
<p>Cari Data :</p>
<form action="/customer/cari" method="GET">
    <input type="text" name="cari" class="form-control" style="width:40%;" placeholder="Cari.." value="{{old('cari')}}">
    <button type="submit" class="btn btn-primary">Cari</button>
</form><br>

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
        <td>{{ @$data->id }}</td>
        <td>{{ @$data->name }}</td>
        <td>{{ @$data->phone_number }}</td>
        <td>{{ @$data->username }}</td>
        <td>{{ @$data->email }}</td>
        <td>{{ @$data->gender }}</td>
        <td>{{ @$data->address }}</td>

        @include('pages.admin.customer.action')
    </tr>
    @endforeach
</table><br>

Halaman : {{$datas->currentPage()}} <br>
Jumlah Data : {{$datas->total()}} <br>
Data Per Halaman : {{$datas->perPage()}} <br>

{{$datas->links()}}
@endsection