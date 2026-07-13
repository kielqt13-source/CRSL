@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row mb-4">
    <div class="col-md-12">
      <h4 class="mb-0">Recognition Accuracy</h4>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5>Overall Accuracy</h5>
          <h2>96.2%</h2>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5>Birth Certificate</h5>
          <h2>98.1%</h2>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h5>Marriage Certificate</h5>
          <h2>95.8%</h2>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
