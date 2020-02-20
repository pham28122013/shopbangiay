<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;
use App\Models\ProductType;

class Product extends Model
{ 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'products';

    const ITEMS_PER_PAGE = 10;
    
    /**
     * Get the images for the products.
     *
     * @return $this
     */
    public function images() {
        return $this->hasMany(ProductImage::class);
    }

     /**
     * Get the type for the products.
     *
     * @return $this
     */
    public function type() {
        return $this->belongsTo(ProductType::class,'product_type_id');
    }

    /**
     * Get the sizes for the products.
     *
     * @return $this
     */
    public function sizes() {
        return $this->hasMany(ProductSize::class);
    }
}
