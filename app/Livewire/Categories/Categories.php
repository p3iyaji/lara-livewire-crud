<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{
    public $name, $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.categories.categories');
    }
}
