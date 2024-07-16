<?php

namespace App\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination, WithoutUrlPagination;

//    public $categories;
//
//    public function mount()
//    {
//        $this->categories = Category::all();
//    }

    public $query;

    public function search()
    {
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.categories.categories', [
            'categories'=> Category::where('name', 'like', '%'.$this->query. '%')->paginate(10),
        ]);
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
