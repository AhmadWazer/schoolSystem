<x-sidebar />
<div class="container mt-4">
<div class="card text-center">
  <div class="card-header">
  Parent Details
  </div>
  <div class="card-body">
    <h5 class="card-title"><strong>Parent Name:</strong>{{@$pdata->name}}</h5>
    <h5 class="card-title"><strong>Parent Email:</strong> {{@$pdata->email}}</h5>
    <h5 class="card-title"><strong>Parent Password:</strong> {{@$pdata->password}}</h5>
    <h5 class="card-title"><strong>Parent Phone:</strong> {{@$pdata->phone}}</h5>
    <h5 class="card-title"><strong>Parent Gender:</strong> {{@$pdata->gender}}</h5>
    <h5 class="card-title"><strong>Parent current_address:</strong> {{@$pdata->current_address}}</h5>
    <h5 class="card-title"><strong>Parent permanent_address:</strong> {{@$pdata->permanent_address}}</h5>
    <h5 class="card-title"><strong>Parent Image:</strong> {{@$pdata->image}}</h5>
    <a href="/parent" class="btn btn-primary">Go Back</a>
  </div>
</div>
</div>
<x-footer />
