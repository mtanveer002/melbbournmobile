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
            <div class="col-5">
                <div class="card left-card">
                    <div class="card-body">
                        <form action="">
                            <input type="text" class="form-control border border-info" placeholder="Search" wire:model="searchTerm" style="border-radius: 50px;">
                        </form>
                        @if ($inquery && $inquery->count() > 0)
                            @foreach ($inquery as $inqr)
                            <li class="list-group-item {{ $active == $inqr->id ? 'border border-success' : '' }} mt-1" wire:click="$emit('cusSelected', {{$inqr->id}})" style="height: 50px;">
                            <p> <b>{{$loop->iteration}}.</b>  {{ $inqr->name }} <span class="{{ $inqr->status == 0 ? 'badge badge-danger' : 'badge badge-success'}} float-right">status</span> </p>
                            </li>
                            @endforeach
                        @else 
                            <p class="text-danger mt-3 ml-1">Record not found</p>
                        @endif
                      
                    </div>
                </div>
            </div>
            
            <div class="col-7">
                @foreach ($customer_info as $info)
                <div class="card">
                    <div class="card-body">
                        <h4>Customer Details</h4>
                        <h5>Name: <strong>{{ $info->name}}</strong></h5>
                        <h5>Email: <strong>{{ $info->email}}</strong></h5>
                        <h5>Phone: <strong>{{ $info->number}}</strong></h5>
                        <hr>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-5 ">
                                <h5>Brand:</h5>
                                <hr>
                                <h5>Modal:</h5>
                                <hr>
                                <h5>Issue:</h5>
                                <hr>
                                <h5>Description:</h5>
                                <hr>
                                <h5>contact_preference:</h5>
                                <hr>
                                <!-- <h5>repairing_methods:</h5>
                                <hr> -->
                            </div>
                            <div class="col-6">
                                <h6 class="mt-0"><strong>{{ $info->brand->brand}}</strong></h6>
                                <hr>
                                <h6 class="mt-2"><strong>{{ $info->modal->name}}</strong></h6>
                                <hr>
                                <h6 class="mt-1"><strong>{{ $info->issue}}</strong></h6>
                                <hr>
                                <h6 class="mt-1"><strong>{{ $info->describtion}}</strong></h6>
                                <hr>
                                <h6 class="mt-1"><strong>{{ $info->contact_preference}}</strong></h6>
                                <hr>
                                <!-- <h6 class="mt-1"><strong>
                                @if ($info->repairing_methods === 'Blackburn' || $info->repairing_methods === 'Hampton Park')
                                        <strong>Walk In:{{$info->repairing_methods}}</strong>
                                @else
                                    <strong>{{$info->repairing_methods}}</strong>
                                @endif    
                                </strong></h6>
                                <hr> -->
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="send_message">
                                    <div class="input_message">
                                        <input type="text" placeholder="Send Message" wire:model="cus_reply">
                                    </div>
    
                                    <div class="send_button">
                                        <a href="#" wire:click="sendMail"><i class="fa fa-lg fa-paper-plane" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    
    
</div>