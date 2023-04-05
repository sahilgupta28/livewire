<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogPageHeader extends Component
{
    public $title = 'My Blog';
    public function render()
    {
        return view('livewire.blog-page-header');
    }
}
