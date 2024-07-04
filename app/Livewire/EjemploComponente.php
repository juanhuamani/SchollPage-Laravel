<?php

namespace App\Livewire;

use Livewire\Component;

class EjemploComponente extends Component
{
    public $count = 1;
    
    public function render()
    {
        return view('livewire.ejemplo-componente');
    }
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
}
