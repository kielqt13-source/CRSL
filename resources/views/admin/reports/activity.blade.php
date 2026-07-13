@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row mb-4">
    <div class="col-md-12">
      <h4 class="mb-0">Activity Reports</h4>
    </div>
  </div>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>User</th>
            <th>Action</th>
            <th>Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John Doe</td>
            <td>Processed Birth Certificate</td>
            <td>Today at 10:30 AM</td>
            <td><span class="badge bg-success">Completed</span></td>
          </tr>
          <tr>
            <td>Jane Smith</td>
            <td>Processed Marriage Certificate</td>
            <td>Today at 09:15 AM</td>
            <td><span class="badge bg-success">Completed</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
