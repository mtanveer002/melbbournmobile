<?php

namespace App\Http\Livewire\Components;

use App\Models\Quote;
use Livewire\Component;

class Notification extends Component
{
    public function render()
    {
        $notification = Quote::where('status', 0)->get();
        $count = Quote::where('status', 0)->count();
        return view('livewire.components.notification', compact('notification', 'count'));
    }
}
