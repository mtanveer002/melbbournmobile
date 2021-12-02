@extends('admin.master')
@section('content')

<div class="card">
    <div class="card-header">
        <h1>Edit Modals</h1>
    </div>
   <div class="card-body">
        <div class="row">
            <div class="col-md-8 col-sm-12 ">
                <div class="card border border-primary p-1">          
                <form action="{{ route('admin.modals.update',$modals->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-1">
                        <label for="brand" class="form-label">Brand</label>
                        <select class="form-select-sm form-control"  name="brand" required>
                            <option selected>select brand</option>
                            @foreach ($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->brand}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('brand')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                    <label for="brand_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="brand" name="modal" value="{{$modals->name}}">
                    </div>
                    @error('modal')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="modal_img" class="form-label">Image</label>
                        <input type="file" class="form-control" id="modal_img" name="modal_img">
                    </div>
                    @error('modal_img')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="col-2">
                        <img src="{{$modals->getImage()}}" alt="" style="width: 100px; height:100px;">
                    </div>
                   
                    <button type="submit" class="btn btn-success float-right ">Update Modals</button>
                    <a href="{{route('admin.brands.index')}}" class="btn btn-danger float-right mr-1">Cancle</a>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
