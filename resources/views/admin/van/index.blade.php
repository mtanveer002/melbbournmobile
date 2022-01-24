@extends('admin.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>All Inquiries</h1>
                    <a href="{{route('admin.van.create')}}" class="btn btn-success float-right">Add new Inquery</a>
                </div>
               <div class="card-body" style="overflow-x:auto;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Brand</th>
                            <th>Model</th>
                            <th>Issue</th>
                            <th>Appointment Time</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($inquiries as $inqury)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $inqury->name }}</td>
                                <td>{{ $inqury->email }}</td>
                                <td>{{ $inqury->address }}</td>
                                <td>{{ $inqury->phone }}</td>
                                <td>{{ $inqury->brand }}</td>
                                <td>{{ $inqury->model }}</td>
                                <td>{{ $inqury->issue }}</td>
                                <td>{{ $inqury->time }}</td>
                                <td>{{ $inqury->price }}</td>
                                @if($inqury->status == 0)
                                    <td><span class="badge badge-danger">Pending</span></td>
                                @else
                                    <td><span class="badge badge-success">Repaired</span></td>
                                
                                @endif
                                <td>
                                    <form  action="{{ route('admin.van.destroy',$inqury->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div style="display: flex;">
                                            <a href="{{route('admin.van.edit', $inqury->id)}}" class="btn-sm btn btn-success"><i class="fa fa-edit"></i></a>
                                            <button type="submit"  class="btn-sm btn btn-danger" id="delete"><i class="fa fa-trash"></i></button>
                                            <a href="{{route('admin.chkStatus', $inqury->id)}}" type="button"  class="btn-sm btn btn-primary"><i class="{{$inqury->status == 0 ? "fa fa-times" : "fa fa-check"}}"></i></a>
                                        </div>
                                    </form> 
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
               </div>
            </div>
        </div>
        <div class="d-flex">
            {{ $inquiries->links() }}
        </div>
    </div>
</div>
@endsection
