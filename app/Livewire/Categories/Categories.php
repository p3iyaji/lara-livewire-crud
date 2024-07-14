<?php

namespace App\Livewire\Categories;

use App\Livewire\Forms\CategoryForm;
use App\Models\Category;
use Livewire\Component;

class Categories extends Component
{

    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.categories.categories');
    }

    public function delete(Category $category)
    {
        try{
            $category->delete();
            session()->flash('success', 'Category successfully deleted');
            return $this->redirect('/categories', navigate:true);
        }catch(\Exception $ex){
            session()->flash('error', 'Something went wrong');
        }
    }
}
