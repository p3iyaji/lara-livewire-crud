<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
      'prod_name',
      'slug',
      'photo',
      'price',
      'description',
      'category_id',
      'qty'
    ];


    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('prod_name')
            ->saveSlugsTo('slug');
    }


    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
