<?php

namespace App\Livewire\Dashboard\Category;

use Livewire\Component;

class Index extends Component
{
    protected $layout = 'layouts.app';
    public function render()
    {
        return view('livewire.dashboard.category.index');
    }
}
