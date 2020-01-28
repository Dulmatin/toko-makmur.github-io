@extends('layouts.adminlte.layout')

@section('content')


<p><b>Cari Data :</b></p>
<form action="/category/cari" method="GET">
    <input type="text" class="form-control" style="width:40%;" name="cari" placeholder="Silahkan Cari..." value="{{old('cari')}}">
    <button type="submit" class="btn btn-primary">Cari</button>
</form><br>

<p><a href="{{ route($view. '.create') }}" class="btn btn-primary">Tambah</a><p>

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
        <td>{{ $data->parent_id }}</td>
        <td>{{ $data->name }}</td>

        @include('pages.admin.' . $view . '.action')
    </tr>
    @endforeach
</table><br>
Halaman : {{$datas->currentPage()}} <br>
Jumlah Data : {{$datas->total()}} <br>
Data Per Halaman : {{$datas->perPage()}} <br>

{{$datas->links()}}
@endsection