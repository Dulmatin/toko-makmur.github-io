<div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
            value="{{ @$data->name }}">
    </div>
    <div class="form-group">
        <label for="name">Unit ID</label>
        <select name="unit_id" class="form-control">
            <option value="">Pilih Unit</option>
            @foreach($listUnit as $unit)
                <option value="{{$unit->id}}" {{ @$data->unit_id == $unit->id ? 'selected' : '' }}>{{$unit->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="name">Name</label>
        <select name="category_id" class="form-control">
            <option value="">Pilih Kategory</option>
            @foreach($listCategory as $category)
                <option value="{{$category->id}}">
                    {{$category->name}}
                </option>
            @endforeach
        </select>
        
    </div>
        <div class="form-group">
        <label for="stok">Stock</label>
        <input type="text" class="form-control" id="stok" name="stok" placeholder="Enter Stok"
            value="{{ @$data->stok }}">
    </div>
    <div class="form-group">
        <label for="purchase_price">Purchase Price</label>
        <input type="number" class="form-control" id="purchase_price" name="purchase_price" placeholder="Enter Purchase Price"
            value="{{ @$data->purchase_price }}">
    </div>
    <div class="form-group">
        <label for="sell_price">Sell Price</label>
        <input type="number" class="form-control" id="sell_price" name="sell_price" placeholder="Enter Sell Price"
            value="{{ @$data->sell_price }}">
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image" placeholder="Enter Image"
            >
    </div>
</div>