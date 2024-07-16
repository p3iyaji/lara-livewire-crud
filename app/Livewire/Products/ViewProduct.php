<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class ViewProduct extends Component
{
    public $product;

    public function mount(Product $product)
    {
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.products.view-product');
    }
}
