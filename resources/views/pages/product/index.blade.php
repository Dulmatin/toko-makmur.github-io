@extends('layouts.adminlte.layout')

@section('content')

<a href="{{ route($view. '.create') }}" class="btn btn-primary">Tambah</a>

<table class="table table-responive">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Unit ID</th>
        <th>Category ID</th>
        <th>Stock</th>
        <th>Purchase Price</th>
        <th>Sell Price</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach ($datas as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ @$data->name }}</td>
        <td>{{ @$data->unit->name }}</td>
        <td>{{ @$data->categori->name }}</td>
        <td>{{ $data->stok }}</td>
        <td>{{ $data->purchase_price}}</td>
        <td>{{ $data->sell_price }}</td>
        <td><img src="{{url ('/gallery/'.$data->image)}}" style="width:150px;" class="img-thumbnail" alt=""></td>

        @include('pages.' . $view . '.action')
    </tr>
    @endforeach
</table>
@endsection