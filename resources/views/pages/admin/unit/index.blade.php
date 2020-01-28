@extends('layouts.adminlte.layout')

@section('content')
<p>Cari Data :</p>
<form action="/unit/cari" method="GET">
    <input type="text" name="cari" class="form-control" style="width:40%;" placeholder="Cari.." value="{{old('cari')}}">
    <button type="submit" class="btn btn-primary">Cari</button>
</form><br>

<a href="{{ route($view. '.create') }}" class="btn btn-primary">Tambah Data</a>


<table class="table table-responive">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    @foreach ($datas as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->name }}</td>

        @include('pages.admin.unit.action')
    </tr>
    @endforeach
</table><br>

Halaman : {{$datas->currentPage()}} <br>
Jumlah Data : {{$datas->total()}} <br>
Data Per Halaman : {{$datas->perPage()}} <br>

{{$datas->links()}}
@endsection