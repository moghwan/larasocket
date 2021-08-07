<?php

namespace App\Http\Livewire;

use App\Events\MsgSentEvent;
use Livewire\Component;

class Messenger extends Component
{
    public $count;

    public function mount()
    {
        $this->count = 0;
    }

    public function render()
    {
        return view('livewire.messenger');
    }

    public function increment()
    {
        $this->count++;
        MsgSentEvent::dispatch('clickawni ' . $this->count . ' mrrate');
    }
}
