
@extends('info.layout')
@section('content')
<div class="card">
  <div class="card-header">
    <h2>Add những gì ?</h2>
</div>
  <div class="card-body">
      
    <form action="{{ url('info') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <p class="help is-danger">{{ $errors->first('name') }}</p>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <p class="help is-danger">{{ $errors->first('address') }}</p>
        <label>Mobile   </label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <p class="help is-danger">{{ $errors->first('phone') }}</p>
        <label>Year</label></br>  
        <input type="text" name="year" id="year" class="form-control"></br>
        <p class="help is-danger bg-red" >{{ $errors->first('year') }}</p>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop