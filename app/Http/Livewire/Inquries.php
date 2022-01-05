<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Livewire\Component;

class Inquries extends Component
{
    public $active = 2;

    protected $listeners = [
        'customerSelected',
    ];

    public function customerSelected($inqrId)
    {
        dd($inqrId);
        $this->active = $inqrId;
        
    }

   
    public function render()
    {
       
        $inquery = Quote::all();
        return view('livewire.inquries', compact('inquery'));
    }

    
}
