<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'prod_name',
      'slug',
      'image',
      'price',
      'description',
      'category_id',
      'qty'
    ];


    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
