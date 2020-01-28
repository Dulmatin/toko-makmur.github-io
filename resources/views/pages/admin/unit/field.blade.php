<div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
            value="{{ @$data->name }}">
            @if($errors->has('name'))
                {{$errors->first('name')}}
            @endif
    </div>
</div>