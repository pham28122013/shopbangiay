<?php

namespace App\Services\Frontend;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Cart;

class CartService
{
    /**
     * Add for the Cart.
     *
     * @param int $id Product id
     * @return void
     */
    public function addCart($id)
    {
        $product = Product::with('images','type')->find($id);
        Cart::add(array('id' => $product->id, 'name' => $product->name, 'quantity' => 1, 'price' => $product->price,'attributes' => ['img' => $product->images->first()->url]));
        $content = Cart::getContent();
    }

    /**
     * Delete for the Cart.
     *
     * @param int $id Product id
     * @return Model
     */
    public function deleteCart($id)
    {
        return Cart::remove($id);
    }

    /**
     * Destroy for the Cart.
     *
     * @param int $id Product id
     * @return Model
     */
    public function destroyCart($id)
    {
        $destroy = Cart::getContent();
        foreach ($destroy as $value) {
            Cart::remove($value->id);
        }
    }
}