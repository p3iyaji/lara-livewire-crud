<?php

namespace App\Livewire\Categories;

use App\Livewire\Forms\CategoryForm;
use Livewire\Component;

class CreateCategory extends Component
{

    public CategoryForm $form;

    public function save()
    {
        try{
            $this->form->store();
            session()->flash('success', 'Category add successfully');
            return $this->redirect('categories');
        }catch(\Exception $ex){
            session()->flash('error', 'Something went wrong');
        }

    }

    public function render()
    {
        return view('livewire.categories.create-category');
    }
}
