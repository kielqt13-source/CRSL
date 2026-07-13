@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row mb-4">
    <div class="col-md-12">
      <h4 class="mb-0">User Actions Log</h4>
    </div>
  </div>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>User</th>
            <th>Action</th>
            <th>Resource</th>
            <th>Timestamp</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John Doe</td>
            <td>Create</td>
            <td>Recognition</td>
            <td>2026-07-12 14:30</td>
            <td><span class="badge bg-success">Success</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
