<?php

namespace App\Http\Livewire;

use App\Models\Quote;
use Livewire\Component;

class Inquries extends Component
{
    public $active = 0;

    protected $listeners = [
        'customerSelected',
    ];

    public function render()
    {
        $inquery = Quote::all();
        return view('livewire.inquries', compact('inquery'));
    }

    public function customerSelected($inqrId)
    {
        dd($inqrId);
        $this->active = $inqrId;
        
    }
}
