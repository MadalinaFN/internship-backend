@extends('layouts.app1')
@section('content')
<div class="container mt-5">
  <div class="card">
    <div class="card-header">View Contact</div>
    <div class="card-body">
      <h5 class="card-title">Name : {{ $contacts->name }}</h5>
      <p class="card-text mt-3">Address : {{ $contacts->address }}</p>
      <p class="card-text">Phone : {{ $contacts->mobile }}</p>
      <button class="btn btn-success" onclick="history.back()">Go Back</button>
    </div>
    </hr>
  </div>
</div>
</div>
@stop