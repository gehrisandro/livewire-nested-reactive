<?php

namespace App\Livewire;

use Livewire\Component;

class Main extends Component
{
    public int $value = 1;

    public function increment()
    {
        $this->value++;
    }

    public function render()
    {
        return view('livewire.main');
    }
}
