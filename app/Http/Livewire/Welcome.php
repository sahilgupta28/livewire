<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Welcome extends Component
{
    public $name = 'sahil';
    public $loud = false;
    public $greeting = ['Hello'];


    public $names = ['sahil', 'sarab', 'pankaj'];

    public function mount($name)
    {
        $this->name = $name;
    }
    public function render()
    {
        return view('livewire.welcome');
    }

    public function  resetName(string $name = 'sahil')
    {
        $this->name = $name;
    }
}
