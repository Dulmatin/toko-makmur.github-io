<div class="card-body">
    <div class="form-group">
        <label for="parent">Parent</label>
        <input type="text" class="form-control" id="parent" name="parent_id" placeholder="Enter Parent"
            value="{{ @$data->parent_id }}">
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
            value="{{ @$data->name }}">
    </div>
</div>