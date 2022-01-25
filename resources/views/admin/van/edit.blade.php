@extends('admin.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h1>Update Inquiry</h1>
                </div>
               <div class="card-body">
                <form action="{{ route('admin.van.update',$inquiries->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="mb-1">
                        <div class="mb-1">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$inquiries->name}}" required>
                        </div>
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="mb-1">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$inquiries->email}}" required>
                        </div>
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="mb-1">
                            <label for="Address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address"  value="{{$inquiries->address}}" required>
                        </div>
                        @error('Address')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="mb-1">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone"  value="{{$inquiries->phone}}" required>
                        </div>
                        @error('Phone')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="mb-1">
                            <label for="brand" class="form-label">Brand</label>
                            <input type="text" class="form-control" id="brand" name="brand"  value="{{$inquiries->brand}}" required>
                        </div>
                        @error('Model')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="mb-1">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" class="form-control" id="model" name="model"  value="{{$inquiries->model}}" required>
                        </div>
                        @error('issue')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="mb-1">
                            <label for="status" class="form-label">Issue</label>
                            <input type="text" class="form-control" id="issue" name="issue"  value="{{$inquiries->issue}}" required>
                        </div>
                        @error('Time')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="mb-1">
                            <label for="time" class="form-label">Appointment Time</label>
                            <input type="datetime-local" class="form-control" id="time" name="time"  value="{{$inquiries->time}}" required>
                        </div>
                        @error('price')
                            <div class="text-danger">{{$message}}</div>
                        @enderror
                        <div class="mb-1">
                            <label for="status" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price"  value="{{$inquiries->price}}" required>
                        </div>
                    <button type="submit" class="btn btn-success float-right ml-1">Update Inquiry</button>
                    <a  class="btn btn-danger float-right" href="{{route('admin.van.index')}}">Cancel</a>

                </form>
               </div>
            </div>
        </div>
    </div>
</div>



@endsection
