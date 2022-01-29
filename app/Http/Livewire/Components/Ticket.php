<?php

namespace App\Http\Livewire\Components;

use App\Models\Ticket as ModelsTicket;
use Livewire\Component;

class Ticket extends Component
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
    public function read($id){

        $Ticket = ModelsTicket::findOrFail($id);
        if($Ticket->status == 0){
            $Ticket->status++;
            session()->flash('message', 'Ticket Mark as Read');
        }else{
            $Ticket->status--;
            session()->flash('message', 'Ticket Mark as UnRead');
        }
        $Ticket->update();
    }

    public function render()
    {   
        $searchTerm = '%' .$this->searchTerm . '%';
        $Tickets = ModelsTicket::where('id', $this->active)->get();
        $ticket = ModelsTicket::where('name', 'like' , $searchTerm)->latest()->get();
        
        return view('livewire.components.Ticket', compact('ticket', 'Tickets'));
    }
}
