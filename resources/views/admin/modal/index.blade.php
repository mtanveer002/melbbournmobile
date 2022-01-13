@extends('admin.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h1>All Modals</h1>
                </div>
               <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Brand</th>
                            <th>Modal</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ($modals as $modal)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{$modal->brand->brand}}</td>
                                <td>{{ $modal->name}}</td>
                                <td>  <img src="{{$modal->getImage()}}" alt="" style="width: 100px; height:110px"> </td>
                                <td>
                                    <form  action="{{ route('admin.modals.destroy',$modal->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <div style="display: flex;">
                                        <a href="{{route('admin.modals.edit', $modal->id)}}" class="btn-sm btn btn-success"><i class="fa fa-edit"></i></a>
                                        <button style="margin-left: 4%;" type="submit"  class="btn-sm btn btn-danger" id="delete"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    {!! $modals->links() !!}
                </div>
               </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h1>Add Modal</h1>
                </div>
               <div class="card-body">
                <form action="{{ route('admin.modals.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                    <label for="modal_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="modal" name="modal_name" required placeholder="Brand Name">
                    </div>
                    @error('modal_name')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="modal_img" class="form-label">Image</label>
                        <input type="file" class="form-control" id="modal_img" name="modal_img">
                    </div>
                    @error('modal_img')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <button type="submit" class="btn btn-success float-right">Add Modal</button>
                </form>
               </div>
            </div>
        </div>
    </div>
</div>



@endsection
