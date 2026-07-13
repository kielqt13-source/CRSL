@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row mb-4">
    <div class="col-md-12">
      <h4 class="mb-0">Assign Permissions</h4>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <div class="mb-3">
        <label class="form-label">Select User</label>
        <select class="form-select">
          <option>Choose a user...</option>
          <option>John Doe</option>
          <option>Jane Smith</option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Permissions</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="perm1">
          <label class="form-check-label" for="perm1">View Records</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="perm2">
          <label class="form-check-label" for="perm2">Edit Records</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="perm3">
          <label class="form-check-label" for="perm3">Delete Records</label>
        </div>
      </div>
      <button class="btn btn-primary">Save Permissions</button>
    </div>
  </div>
</div>
@endsection
