<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Products extends Component
{

    public $prod_name, $description, $price, $qty, $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        return view('livewire.products.products');
    }
}
