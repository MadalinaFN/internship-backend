@extends('layouts.app1')
@section('content')
<div class="container mt-5">
  <div class="card">
    <div class="card-header">Edit Contact</div>
    <div class="card-body">

      <form action="{{ url('contact/' .$contacts->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$contacts->id}}" />
        <div>
          <label>Name</label></br>
          <input type="text" name="name" id="name" value="{{$contacts->name}}" class="form-control"></br>
          @error('name')
            <p class="text-sm red" style="color:red;">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label>Address</label></br>
          <input type="text" name="address" id="address" value="{{$contacts->address}}" class="form-control"></br>
          @error('address')
            <p class="text-sm text-red" style="color:red;">{{ $message }}</p>
          @enderror
        </div>
        <div>
          <label>Mobile</label></br>
          <input type="number" name="mobile" id="mobile" value="{{$contacts->mobile}}" class="form-control"></br>
          @error('mobile')
            <p class="text-sm text-red" style="color:red;">{{ $message }}</p>
          @enderror
        </div>
        <input type="submit" value="Update" class="btn btn-success"></br>
      </form>

    </div>
  </div>
</div>
@stop