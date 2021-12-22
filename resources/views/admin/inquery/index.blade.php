@extends('admin.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>All Customer Inqueries</h1>
                </div>
               <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Brand</th>
                            <th>Modal</th>
                            <th>Issue</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody> @php $i =1; @endphp
                        @foreach ($inquries as $inquery)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $inquery->name}}</td>
                                <td>{{ $inquery->email}}</td>
                                <td>{{ $inquery->number}}</td>
                                <td>{{ $inquery->brand->brand}}</td>
                                <td>{{ $inquery->modal->name}}</td>
                                <td>{{ $inquery->issues->issue}}</td>
                                <td>{{ $inquery->describtion}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                  
                </div>
               </div>
            </div>
        </div>
        
    </div>
</div>



@endsection
