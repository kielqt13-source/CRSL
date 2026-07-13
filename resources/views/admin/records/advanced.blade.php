@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row mb-4">
    <div class="col-md-12">
      <h4 class="mb-0">Advanced Filters</h4>
    </div>
  </div>

  <div class="card">
    <div class="card-body">
      <form class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Status</label>
          <select class="form-select">
            <option>All</option>
            <option>Verified</option>
            <option>Pending</option>
            <option>Failed</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Date From</label>
          <input type="date" class="form-control">
        </div>
        <div class="col-md-4">
          <label class="form-label">Date To</label>
          <input type="date" class="form-control">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Apply Filters</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
