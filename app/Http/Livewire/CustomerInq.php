<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Livewire\Component;

class CustomerInq extends Component
{
    public $active = 1;
    public $mail;

   protected $listeners = [
    'cusSelected',
    ];

    public function cusSelected($cusID)
    {
        $this->active = $cusID;
    }

    public function sendMail()
    {
        $cus_info = Quote::where('id', $this->active)->first();
        $msg = "Hi $cus_info->name";
        dd($msg);
    }
    public function render()
    {   $inquery = Quote::latest()->paginate(5);
        $customer_info = Quote::where('id', $this->active)->get();
        return view('livewire.customer-inq', compact('inquery', 'customer_info'));
    }
}
