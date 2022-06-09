@extends('website.master')
@section('web_content')

<div class="jumbotron">
    <div class="container">
        <div class="row" style="text-align: center">
            <!-- <div class="col-md-6"> -->
                <h1 style="font-size:40px;text-align: center;color:#fb6128">Sony</h1>
                <hr>
                <h2 style="font-size:22px;text-align: center">Categories</h2>
            <!-- </div> -->
            <!-- <div class="col-md-6">
                <img src="{{ asset('assets/pages/img/works/ipad.png')}}" style="height: 200px" />
            </div> -->
        </div>
      </div>
      <br>
      <div class="container">
    <div class="row mt-2 g-4">
        @foreach($models as $model)
                <div class="col-md-3">
                    <a href="{{ route('sony_repairs') }}">
                    <div class="card p-1">
                        <div class="d-flex justify-content-between align-items-center p-2">
                            <div class="flex-column lh-1 imagename"> 
        
                            <span>{{ $model->name }}</span>
                            
                        </div>
                            <div> <img src="{{ asset('assets/pages/img/works/samsung.jpg') }}" height="100" width="100" /> </div>
                        </div>
                    </div>
                    </a>
                </div>
        @endforeach
    </div>
</div>

</div>

@endsection