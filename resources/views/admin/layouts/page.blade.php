@extends('admin.master')
@section('content')
<style>
   .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
    color: white;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px;
    font-style: italic;
    text-transform: capitalize;
    display: block;
    font-size: 18px;
    color: wheat;
  }
</style>
   <h1>Welcome to Melbbourn Mobile Repair dashboard </h1>
   <div class="container">
      <div class="row">
      <div class="col-md-3">
        <div class="card-counter primary">
          <i class="fa fa-code-fork"></i>
          <span class="count-numbers">
        @foreach ($counters as $count)
            {{ $count->views }}
        @endforeach
          </span>
          <span class="count-name">Visitors</span>
        </div>
      </div>
  
      <div class="col-md-3">
        <div class="card-counter danger">
          <i class="fa fa-ticket"></i>
          <span class="count-numbers">
            {{$inquiries}}
          </span>
          <span class="count-name">All Inquiries</span>
        </div>
      </div>
  
      <div class="col-md-3">
        <div class="card-counter success">
          <i class="fa fa-database"></i>
          <span class="count-numbers">
            {{$approvedInquiries}}
          </span>
          <span class="count-name">Approved Inquiries</span>
        </div>
      </div>
  
      <div class="col-md-3">
        <div class="card-counter info">
          <i class="fa fa-users"></i>
          <span class="count-numbers">
            {{$pendingInquiries}}
          </span>
          <span class="count-name">Pending Inquiries</span>
        </div>
      </div>
    </div>
  </div>

@endsection
