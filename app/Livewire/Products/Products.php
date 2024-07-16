<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Products extends Component
{

    use WithPagination, WithoutUrlPagination;

    public $prod_name, $description, $price, $qty, $query, $product;

    public function search()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.products.products', [
            'products'=> Product::where('prod_name', 'like', '%'.$this->query. '%')->paginate(10),
        ]);
    }

    public function delete(Product $product)
    {
       try{
           $product->delete();
           session()->flash('success', 'Product deleted successfully');
           return $this->redirect('/products');
       }catch(\Exception $ex){
           session()->flash('error', 'Somthing went wrong');
       }
    }
}
