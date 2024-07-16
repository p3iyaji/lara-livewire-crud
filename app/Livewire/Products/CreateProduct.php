<?php

namespace App\Livewire\Products;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{

    use WithFileUploads;

    public $categories, $photo;
    public ProductForm $form;

    public function save()
    {
        try{
            $this->form->store();
            session()->flash('success', 'Product added successfully');
            return $this->redirect('products');
        }catch(\Exception $ex){
            session()->flash('error', 'Something went wrong');
        }
    }

    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.products.create-product');
    }
}
