@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row mb-4">
    <div class="col-md-12">
      <h4 class="mb-0">Activity History</h4>
    </div>
  </div>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Timestamp</th>
            <th>User</th>
            <th>Action</th>
            <th>Details</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2026-07-12 14:30</td>
            <td>John Doe</td>
            <td>Record Verification</td>
            <td>Verified birth certificate #001</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
