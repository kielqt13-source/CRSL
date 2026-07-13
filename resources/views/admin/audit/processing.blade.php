@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row mb-4">
    <div class="col-md-12">
      <h4 class="mb-0">Processing Log</h4>
    </div>
  </div>

  <div class="card">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Record ID</th>
            <th>Type</th>
            <th>Processing Time</th>
            <th>Status</th>
            <th>Result</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>#001</td>
            <td>Birth Certificate</td>
            <td>2.3s</td>
            <td><span class="badge bg-success">Success</span></td>
            <td>96.8% confidence</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
