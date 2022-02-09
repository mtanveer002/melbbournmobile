@extends('admin.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>All Brand Issues</h1>
                    <a href="{{route('admin.issues.create')}}" class="btn btn-success float-right">Create Issues</a>
                </div>
               <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                           
                            <th>issue</th>
                           
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($issues as $issue)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                               
                                <td>{{ $issue->issue }}</td>
                                
                               
                                <td>
                                    <form  action="{{ route('admin.issues.destroy',$issue->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('admin.issues.edit', $issue->id)}}" class="btn-sm btn btn-success"><i class="fa fa-edit"></i></a>
                                        <button type="submit"  class="btn-sm btn btn-danger" id="delete"><i class="fa fa-trash"></i></button>
                                    </form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    {{ $issues->links() }}
                </div>
               </div>
            </div>
        </div>
    </div>
</div>



@endsection
