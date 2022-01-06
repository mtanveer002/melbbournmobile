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
    
    </style>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        
                            @foreach ($inquery as $inqr)
                                <li class="list-group-item {{ $active == $inqr->id ? 'border border-danger' : '' }} mt-1" wire:click="$emit('cusSelected', {{$inqr->id}})">
                                    
                                    {{ $inqr->name }}
                                </li>
                            @endforeach
                       
                    </div>
                </div>
            </div>
            
            <div class="col-9">
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
                            <div class="col-2 ">
                                <h5>Brand:</h5>
                                <hr>
                                <h5>Modal:</h5>
                                <hr>
                                <h5>Issue:</h5>
                                <hr>
                                <h5>Description:</h5>
                                <hr>
                            </div>
                            <div class="col-4">
                                <h6 class="mt-0"><strong>{{ $info->brand->brand}}</strong></h6>
                                <hr>
                                <h6 class="mt-2"><strong>{{ $info->modal->name}}</strong></h6>
                                <hr>
                                <h6 class="mt-1"><strong>{{ $info->issues->issue}}</strong></h6>
                                <hr>
                                <h6 class="mt-1"><strong>{{ $info->describtion}}</strong></h6>
                                <hr>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <div class="send_message">
                                    <div class="input_message">
                                        <input type="text" placeholder="Send Message">
                                    </div>
    
                                    <div class="send_button">
                                        <a href=""><i class="fa fa-lg fa-paper-plane" aria-hidden="true"></i></a>
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