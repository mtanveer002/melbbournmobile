@extends('admin.master')
@section('content')

<div class="card">
    <div class="card-header">
        <h1>Edit Brands</h1>
    </div>
   <div class="card-body">
        <div class="row">
            <div class="col-md-8 col-sm-12 ">
                <div class="card border border-primary p-1">          
                <form action="{{ route('admin.brands.update',$brands->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-1">
                    <label for="brand_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="brand" name="brand" value="{{$brands->brand}}">
                    </div>
                    @error('brand')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="brand_img" class="form-label">Image</label>
                        <input type="file" class="form-control" id="brand_img" name="brand_img">
                    </div>
                    @error('brand_img')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="col-2">
                        <img src="{{$brands->getImage()}}" alt="" style="width: 100px; height:100px;">
                    </div>
                   
                    <button type="submit" class="btn btn-success float-right ">Update Brands</button>
                    <a href="{{route('admin.brands.index')}}" class="btn btn-danger float-right mr-1">Cancle</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
