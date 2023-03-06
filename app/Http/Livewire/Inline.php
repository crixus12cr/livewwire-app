<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Inline extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                {{-- Care about people's approval and you will be their prisoner. --}}
            </div>
        blade;
    }
}
