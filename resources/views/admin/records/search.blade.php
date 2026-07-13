@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row mb-4">
    <div class="col-md-12">
      <h4 class="mb-0">Search Records</h4>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form class="row g-3">
        <div class="col-md-6">
          <label class="form-label">Search</label>
          <input type="text" class="form-control" placeholder="Search by record ID or name">
        </div>
        <div class="col-md-6">
          <label class="form-label">Document Type</label>
          <select class="form-select">
            <option>All Types</option>
            <option>Birth Certificate</option>
            <option>Marriage Certificate</option>
            <option>Death Certificate</option>
          </select>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
