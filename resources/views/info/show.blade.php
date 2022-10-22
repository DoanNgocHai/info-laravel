@extends('info.layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Hình như trang này là Detail ?</h2>
    </div>
    <div class="card-body">
        <p>Name: {{$info->name}}</p>
        <p>Address: {{$info->address}}</p>
        <p>Phone: {{$info->phone}}</p>
        <p>Year: {{$info->year}}</p>
        <a href="{{ url('/info') }}" class="btn btn-success btn-sm">
            <i class="fa fa-plus" aria-hidden="true"></i> Back
        </a>
    </div>

</div>