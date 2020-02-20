<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CartRequest;
use App\Services\Frontend\CartService;
use Cart;

class CartController extends Controller
{
    /**
     * @var CartService
     */
    private $cartService;

    /**
     * initialize the function __construct
     * 
     */
    public function __construct(CartService $cartservice)
    {
        $this->cartService = $cartservice;
    }
    
    /**
     * Add for the Cart.
     *
     * @param int $id Product id
     * @return route
     */
    public function addCart($id)
    {
        $this->cartService->addCart($id);
        return redirect()->route('cart.list');
    }
    
    /**
     * List for the Cart.
     *
     * @return view
     */
    public function listCart(CartRequest $request)
    {
        $content = Cart::getContent();
        $total = Cart::getSubTotal();
        $totalquantity = Cart::getTotalQuantity();
        return view('products.cart',['content' => $content, 'total' => $total, 'totalquantity' => $totalquantity]);
    }

    /**
     * Delete for the Cart.
     *
     * @param int $id Product id
     * @return route
     */
    public function deleteCart($id)
    {
        $this->cartService->deleteCart($id);
        return redirect()->route('cart.list');
    }

    /**
     * Destroy for the Cart.
     *
     * @param int $id Product id
     * @return route
     */
    public function destroyCart($id)
    {
        $this->cartService->destroyCart($id);
        return redirect()->route('cart.list');
    }

    /**
     * Update for the Cart.
     *
     * @param \Illuminate\Http\Request  $request
     * @param int $id Product id
     * @param int $quantity Product quantity
     * @return response
     */
    public function updateCart(Request $request, $id, $quantity)
    {
       if($request->ajax()){
         Cart::update($id,array(
            'quantity' => array(
                'relative' => false,
                'value' => $quantity
            ),
          ));
          $get = Cart::get($id);
          $total = Cart::getSubTotal();
        return response()->json([
            'get' => $get , 'total' => $total
        ]);
       }
    }
}
