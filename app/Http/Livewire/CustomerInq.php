<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class CustomerInq extends Component
{
    public $active;
    public $cus_reply;

   protected $listeners = [
    'cusSelected',
    ];

    public function cusSelected($cusID)
    {
        $this->active = $cusID;
    }

    public function sendMail()
    {
                
        $userdata=array('reply'=>$this->cus_reply);
        
        Mail::send('/email/quoteMail',['userdata' => $userdata]
            , function($message) use ($userdata)
        {
            $cus_email = Quote::where('id', $this->active)->first();
            $message->to($cus_email->email)->subject('MMPR Repair Reply');
        });

        $this->cus_reply = "";

        session()->flash('message', 'Message Sent Successfully');
    }

    public function render()
    {   
        $customer_info = Quote::where('id', $this->active)->get();
        $inquery = Quote::latest()->paginate(5);
       
        return view('livewire.customer-inq', compact('inquery', 'customer_info'));
    }
}
