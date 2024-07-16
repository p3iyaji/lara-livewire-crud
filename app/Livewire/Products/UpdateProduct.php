<?php

namespace App\Livewire\Products;

use App\Livewire\Forms\ProductForm;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProduct extends Component
{
    use WithFileUploads;
    public ProductForm $form;
    public $categories, $product, $photo, $category;

    public function mount(Product $product)
    {
        $this->categories = Category::all();
        $this->form->setProduct($product);
    }

    public function update()
    {
        try{
            $this->form->update();
            session()->flash('success', 'Product updated successfully');
            return $this->redirect('/products');
        }catch(\Exception $ex){
            session()->flash('error', 'Something went wrong');
        }
    }
    public function render()
    {
        return view('livewire.products.update-product');
    }
}
