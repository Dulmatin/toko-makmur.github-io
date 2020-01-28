<div class="card-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
            value="{{ @$data->name }}">
        <label for="phone_number">Phone Number</label>
        <input type="number" class="form-control" id="name" name="phone_number" placeholder="Enter Phone Number"
            value="{{ @$data->phone_number }}">
      
        <label for="username">Username</label>
        <input type="text" class="form-control" id="name" name="username" placeholder="Enter Username"
            value="{{ @$data->username }}">
      
        <label for="email">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email"
            value="{{ @$data->email }}">
 
         
        <label for="gender">Gender</label>
        <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter Gender"
            value="{{ @$data->gender }}">
             
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address"
            value="{{ @$data->address }}">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" value="{{ @$data->password }}">
     
    </div>
</div>