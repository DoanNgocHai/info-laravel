@extends('info.layout')
@section('content')
<div class="card">
  <div class="card-header">
    <h2>Hình như là trang Update!!</h2>
</div>
    <div class="card-body">
        
      <form action="{{ url('info/'.$information->id) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <label>Name</label></br>
          <input type="text" value="{{$information->name}}" name="name" id="name" class="form-control"></br>

          <label>Address</label></br>
          <input type="text" value="{{$information->address}}" name="address" id="address" class="form-control"></br>

          <label>Mobile</label></br>
          <input type="text" value="{{$information->phone}}" name="phone" id="phone" class="form-control"></br>

          <label>Year</label></br>  
          <input type="text" value="{{$information->year}}" name="year" id="year" class="form-control"></br>

          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>
      
    </div>
  </div>

