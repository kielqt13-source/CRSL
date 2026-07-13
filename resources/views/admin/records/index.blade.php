@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row mb-4">
    <div class="col-md-12">
      <h4 class="mb-0">All Records</h4>
    </div>
  </div>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Record ID</th>
            <th>Document Type</th>
            <th>Status</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#001</td>
            <td>Birth Certificate</td>
            <td><span class="badge bg-success">Verified</span></td>
            <td>2026-07-12</td>
            <td><button class="btn btn-sm btn-primary">View</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
