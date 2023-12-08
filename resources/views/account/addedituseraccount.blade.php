<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container m-5 p-2 border rounded col-10">
  <h3>Add/Edit Account</h3>
  <!-- !empty($useraccount)? route('useraccount.update', ['id' => $useraccount->id]) : -->
<form class="row g-3" method="post" action="{{!empty($useraccount)? route('useraccount.update', ['id' => $useraccount->id]) :  url('/useraccount/store') }}">
@csrf  
<div class="col-md-6">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control"name="name"value="{{@$useraccount->name}}" id="name">
  </div>
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control"name="email"value="{{@$useraccount->email}}" id="email">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Password</label>
    <input type="password" class="form-control"name="password"value="" id="inputAddress" placeholder="********">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Created_At</label>
    <input type="date" class="form-control"name="created_at"value="{{@$useraccount->created_at}}" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <!-- <div class="col-md-6">
    <label for="inputCity" class="form-label">Status</label>
    <input type="text" class="form-control"name="status"value="{{@$useraccount->status}}" id="inputCity">
  </div> -->
  <div class="col-md-6">
    <label for="inputState" class="form-label">Status</label>
    <select id="inputState" class="form-select" name="status">
      <option value="{{@$useraccount->status}}">{{@$useraccount->status}}</option>
      <option value="active">Active</option>
      <option value="pending">Pending</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Role</label>
    <select id="inputState" class="form-select" name="role">
      <option value="{{@$useraccount->role}}">{{@$useraccount->role}}</option>
      @foreach($role as $data)
      <option value="{{$data->role_name}}">{{$data->role_name}}</option>
      @endforeach
    </select>
  </div>
  <div class="col-12 justify-content-md-end d-grid gap-2 d-md-flex">
    <button type="submit" class="btn btn-primary send-btn">Submit</button>
    <a href="/useraccount" type="button" class="btn btn-dark">Back</a>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>