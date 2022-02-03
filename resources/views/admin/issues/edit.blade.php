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
                <form action="{{ route('admin.issuess.update',$issues->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-1">
                        <label for="brand" class="form-label">Brand</label>
                        <select class="form-select-sm form-control"  name="brand" required>
                            @foreach ($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->brand}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('brand')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="modal" class="form-label">Modals</label>
                        <select class="form-select-sm form-control"  name="modal" required>
                             @foreach ($modals as $modal)
                                <option value="{{$modal->id}}">{{$modal->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('modal')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                    <label for="issue" class="form-label">Issue</label>
                    <input type="text" class="form-control" id="modal" name="issue" value="{{$issues->issue}}" required>
                    </div>
                    @error('issue')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{$issues->price}}">
                    </div>
                    @error('price')
                        <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="mb-1">
                        <label for="Description" class="form-label">Description</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{$issues->description}}">
                    </div>
                    @error('description')
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
<script type="text/javascript">
    $(document).ready(function() {
      $('select[name="brand"]').on('change', function(){
          var brand = $(this).val();
          if(brand) {
              $.ajax({
                  url: "{{  url('/admin/modal/ajax') }}/"+brand,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                     var d =$('select[name="modal"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="modal"]').append('<option value="'+ value.id +'">' + value.name + '</option>');
                        });
                  },
              });
              console.log(brand)
          } else {
              alert('danger');
          }
      });
  });
  </script>


@endsection
