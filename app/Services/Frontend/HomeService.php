<?php

namespace App\Services\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeService
{
    /**
     * Get all of products
     *
     * @return Model
     */
    public function getAllProducts()
    {   
        return Product::with('images')->get();
    }

    /**
     * Get all of products
     *
     * @param $id int id product
     * @return Model
     */
    public function getProductId($id)
    {
        return Product::with('images','type','sizes')->find($id);
    }

    /**
     * search the product.
     *
     * @param \Illuminate\Http\Request  $request
     * @return Model
     */
    public function getAllSearch($request)
    {
        $search = $request->search;
        return Product::where('name','like',"%$search%")->orwhere('price','like',"%$search%")->get();
    }
}