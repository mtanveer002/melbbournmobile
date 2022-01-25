@extends('admin.master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h1>Create Inquiry</h1>
                </div>
               <div class="card-body">
                <form action="{{ route('admin.van.store')}}" method="POST">
                    @csrf
                    <div class="mb-1">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required>
                    </div>
                    @error('name')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                    </div>
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="Address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                    </div>
                    @error('Address')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone" required>
                    </div>
                    @error('Phone')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="brand" name="brand" placeholder="Enter Brand" required>
                    </div>
                    @error('Model')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Enter Model" required>
                    </div>
                    @error('issue')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="status" class="form-label">Issue</label>
                        <input type="text" class="form-control" id="issue" name="issue" placeholder="Enter Issue" required>
                    </div>
                    @error('Time')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="time" class="form-label">Appointment Time</label>
                        <input type="datetime-local" class="form-control" id="time" name="time" placeholder="Issue Time" required>
                    </div>
                    @error('price')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="status" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                    </div>
                    <button type="submit" class="btn btn-success float-right">Add Inquiry</button>
                    <a  class="btn btn-danger float-right mr-1" href="{{route('admin.van.index')}}">Cancel</a> 
                </form>
               </div>
            </div>
        </div>
    </div>
</div>


@endsection
