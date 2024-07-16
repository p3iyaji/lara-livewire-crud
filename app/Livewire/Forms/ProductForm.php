<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class ProductForm extends Form
{
    public ?Product $product;

    //use WithFileUploads;

    #[Validate('required|unique:products')]
    public $prod_name = '';

    #[Validate('required')]
    public $price = '';

    #[Validate('required')]
    public $description = '';
    public $photo = '';

    #[Validate('required')]
    public $qty = '';

    #[Validate('required')]
    public $category_id = '';

    public function setProduct(Product $product)
    {
        $this->product = $product;
        $this->prod_name = $product->prod_name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->qty = $product->qty;
        $this->photo = $product->photo;
        $this->category_id = $product->category_id;
    }
    public function store()
    {
        $this->validate();

        $photo_title = $this->photo->getClientOriginalName();
        $photo_path = $this->photo->storeAs('public/imgs', $photo_title);

        Product::create([
            'prod_name'=>$this->prod_name,
            'price'=>$this->price,
            'description'=>$this->description,
            'qty'=>$this->qty,
            'photo'=>$photo_title,
            'category_id'=>$this->category_id,
        ]);
    }

    public function update()
    {
        $this->validate();

            $this->product->update([
                'prod_name'=>$this->prod_name,
                'price'=>$this->price,
                'description'=>$this->description,
                'qty'=>$this->qty,
                'category_id'=>$this->category_id,
            ]);



    }



}
