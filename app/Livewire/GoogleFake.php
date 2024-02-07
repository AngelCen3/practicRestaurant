<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Google Clone')]
class GoogleFake extends Component
{
    public function render()
    {
        return view('livewire.google-fake');
    }
}
