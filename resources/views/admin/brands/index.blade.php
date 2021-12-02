@extends('admin.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h1>All Brands</h1>
                </div>
               <div class="card-body">
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
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $brand->brand}}</td>
                                <td>  <img src="{{ $brand->getImage() }}" alt="" style="width: 100px; height:110px"> </td>
                                <td>
                                    <form  action="{{ route('admin.brands.destroy',$brand->id)}}" method="POST" enctype="multipart/form-data">
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
                <div class="d-flex">
                    {!! $brands->links() !!}
                </div>
               </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h1>Add Brands</h1>
                </div>
               <div class="card-body">
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
