@extends('admin.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <form action="{{ route('admin.profile.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="mb-1 row">
                            <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control"
                                    id="inputName" placeholder="Full Name">
                                <span class="text-danger"> @error('name') {{ $message }} @enderror </span>
                            </div>
                        </div>
                        <div class="mb-1 row">
                            <label for="name" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ auth()->user()->email }}"
                                    class="form-control" id="inputemail" placeholder="abc@xzy.com">
                                <span class="text-danger"> @error('email') {{ $message }} @enderror </span>
                            </div>
                        </div>
                        <div class="mb-1 row">
                            <label for="name" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" class="form-control" id="inputpassword"
                                    placeholder="password">
                            </div>
                        </div>
                        <div class="mb-1 row">
                            <label for="name" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="confirm_password" class="form-control" id="inputpassword"
                                    placeholder="password">
                            </div>
                        </div>
                        <div class="mb-1 row">
                            <label for="name" class="col-sm-2 col-form-label">User image</label>
                            <div class="col-sm-10">
                                <input type="file" name="image" value="" class="form-control" id="inputimage"
                                    placeholder="">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block col-3"
                            style="float:right;">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection