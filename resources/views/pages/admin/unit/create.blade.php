@extends('layouts.adminlte.layout')

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
    </div>
    
    <form role="form" action="{{ route('unit.store') }}" method="post">
        {{ csrf_field() }}

        @include('pages.admin.unit.field')

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection