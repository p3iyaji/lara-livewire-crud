<?php

namespace App\Livewire\Categories;

use App\Livewire\Forms\CategoryForm;
use App\Models\Category;
use Livewire\Component;

class UpdateCategory extends Component
{
    public $category;
    public CategoryForm $form;

    public function mount(Category $category)
    {

        $this->form->setCategory($category);
    }

    public function save()
    {
        try{
            $this->form->update();
            session()->flash('success', 'Category updated successfully');
            return $this->redirect('/categories');
        }catch(\Exception $ex){
            session()->flash('error', 'Something went wrong');
        }

    }

    public function render()
    {
        return view('livewire.categories.update-category');
    }
}
