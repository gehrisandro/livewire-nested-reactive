<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class Child extends Component
{
    #[Reactive]
    public int $value;

    public function render()
    {
        return view('livewire.child');
    }
}
