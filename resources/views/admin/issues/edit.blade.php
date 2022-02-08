@extends('admin.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h1>Create Issues</h1>
                </div>
               <div class="card-body">
                <form action="{{ route('admin.issues.update',$issues->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-1">
                    <label for="issue" class="form-label">Issue</label>
                    <input type="text" class="form-control" id="modal" name="issue" value="{{$issues->issue}}" required>
                    </div>
                    @error('issue')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <button type="submit" class="btn btn-success float-right ml-1">Update Issue</button>
                    <a  class="btn btn-danger float-right" href="{{route('admin.issues.index')}}">Cancel</a>

                </form>
               </div>
            </div>
        </div>
    </div>
</div>

{{-- for auto selection select box --}}


@endsection
