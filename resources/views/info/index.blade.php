@extends('info.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Đoàn Ngọc Hải Information</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/info/create') }}" class="btn btn-success btn-sm" title="Add New Crud">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Year</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($info as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->year }}</td>
                                        
                                        <td>
                                            <a href="{{url('/info/'. $item->id) }}"><button class="btn btn-info btn-sm">Detail</button></a>
                                    
                                        
                                 
                                            <a href="{{url('/info/'. $item->id).'/edit' }}"><button class="btn btn-primary btn-sm">Update</button></a>
                                            
                 
    
                                            <form method="POST" action="{{ url('/info' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Crud" onclick="return confirm(&quot;muốn delete thiệt hông?&quot;)">Delete</button>
                                            </form>
                                        </td>   
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection