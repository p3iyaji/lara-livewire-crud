<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CategoryForm extends Form
{
    public ?Category $category;

    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $description = '';

    public function setCategory(Category $category)
    {
        $this->category = $category;
        $this->name = $category->name;
        $this->description = $category->description;
    }

    public function store()
    {
        $this->validate();
        // Category::create($this->all());
        Category::create([
            'name'=> $this->name,
            'description' => $this->description,
        ]);
    }

    public function update()
    {
        $this->validate();

        $this->category->update([
           'name' => $this->name,
           'description' => $this->description,
        ]);
    }


}
