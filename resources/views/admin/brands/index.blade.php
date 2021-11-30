@extends('admin.master')
@section('content')

<div class="card">
    <div class="card-header">
        <h1>Brands</h1>
    </div>
   <div class="card-body">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Brands</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody> @php $i =1; @endphp
                        @foreach ($brands as $brand)
                            <tr>
                                <td>{{ $i++}}</td>
                                <td>{{ $brand->brand}}</td>
                                <td>  <img src="{{ $brand->getImage() }}" alt="" style="width: 80px; height:80px"> </td>
                                <td>
                                    <form  action="" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('admin.brands.edit', $brand->id)}}" class="btn-sm btn btn-success"><i class="fa fa-edit"></i></a>
                                        <button type="submit"  class="btn-sm btn btn-danger" id="delete"><i class="fa fa-trash"></i></button>
                                    </form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-4 col-sm-12 ">
                <div class="card border border-primary p-1">
                    <h3 >Add Brands</h3>            
                <form action="{{ route('admin.brands.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-1">
                    <label for="brand_name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="brand" name="brand">
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
                    <button type="submit" class="btn btn-success float-right">Add Brands</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
