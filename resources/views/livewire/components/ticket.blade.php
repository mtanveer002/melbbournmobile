<div>
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
        .content {
            position: relative;
        }
        .left-card{
            position: absolute;
            height: 500px;
            overflow-y: scroll
        }
        .list-group-item:hover{
            background: azure;
        }
       
    
    </style>
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="row">
            <div class="col-4">
                <div class="card left-card">
                    <div class="card-body">
                        <form action="">
                            <input type="text" class="form-control border border-info" placeholder="Search" wire:model="searchTerm" style="border-radius: 50px;">
                        </form>
                        @if ($ticket && $ticket->count() > 0)
                            @foreach ($ticket as $inqr)
                            <li style="height: 20%" class="list-group-item {{ $active == $inqr->id ? 'border border-success' : '' }} mt-1" wire:click="$emit('cusSelected', {{$inqr->id}})" style="height: 50px;" >
                            <p> <b>{{$loop->iteration}}.</b><b>{{ $inqr->name }} </b> <span class="{{ $inqr->status == 0 ? 'badge badge-danger' : 'badge badge-success'}} float-right">status</span> <br><i>{{ $inqr->email }}</i>
                            </p>
                            </li>
                            @endforeach
                        @else 
                            <p class="text-danger mt-3 ml-1">Record not found</p>
                        @endif
                      
                    </div>
                </div>
            </div>
            
            <div class="col-8">
                @foreach ($Tickets as $ticket)
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-4 ">
                                <h3>Customer Ticket</h3>
                            </div>
                            <div class="col-7">
                                <a href="#" wire:click="read({{$ticket->id}})" style="float: right" type="button"  class="btn-sm btn btn-primary"><i class="{{$ticket->status == 0 ? "fa fa-eye-slash" : "fa fa-eye"}}"></i></a>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-4 ">
                                <strong>Message:</strong>
                                <hr>
                            </div>
                            <div class="col-10">
                                <h6 class="mt-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $ticket->message}}</h6>
                                <hr>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    
</div>