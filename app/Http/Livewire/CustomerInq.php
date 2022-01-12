<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class CustomerInq extends Component
{
    public $active;
    public $cus_reply;
    public $searchTerm = '';

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

        $status = Quote::findOrFail($this->active);
        $status->status = 1;
        $status->update();

        session()->flash('message', 'Message Sent Successfully');
    }

    public function render()
    {   
        $searchTerm = '%' .$this->searchTerm . '%';
        $customer_info = Quote::where('id', $this->active)->get();
        $inquery = Quote::where('name', 'like' , $searchTerm)->latest()->get();
        
        return view('livewire.customer-inq', compact('inquery', 'customer_info'));
    }
}
