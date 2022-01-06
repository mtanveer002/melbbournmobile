<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Livewire\Component;

class CustomerInq extends Component
{
   public $active = 1;
    public $sum;
   protected $listeners = [
    'cusSelected',
    ];

    public function cusSelected($cusID)
    {
        
        $this->active = $cusID;
       
        
    }
    public function render()
    {   $inquery = Quote::all();
        $customer_info = Quote::where('id', $this->active)->get();
        return view('livewire.customer-inq', compact('inquery', 'customer_info'));
    }
}
