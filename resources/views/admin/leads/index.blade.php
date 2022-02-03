@extends('admin.master')
@section('content')
<style>
        .send_message {
            width: 100%;
            display: inline-block;
        }
    
        .input_message {
            width: 85%;
            float: left;
        }
    
        .send_button {
            width: 15%;
            float: left;
            padding: 10px 0 0 20px;
        }
    
        .input_message input {
            width: 100%;
            height: 45px;
            border: 1px solid #ccc;
            border-radius: 15px;
            padding: 0 15px;
            color: #000;
        }
    
    </style>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
               <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10%;">Sr.</th>
                            <th style="width: 30%;">Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leads as $lead)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $lead->name }}</td>
                            <td>{{ $lead->email }}</td>
                            <td>{{$lead->number}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    {{ $leads->links() }}
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="send_message">
                            <form action="{{ route('lead.mail')}}" method="GET">
                            @csrf
                            <div class="input_message">
                            <input type="text" placeholder="Send Message" name="data" id="emails" required>
                            </div>
                            @error('emails')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <div class="send_button">
                                <button type="submit" style="background: transparent;border: none;"><i class="fa fa-lg fa-paper-plane" aria-hidden="true"></i></button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
