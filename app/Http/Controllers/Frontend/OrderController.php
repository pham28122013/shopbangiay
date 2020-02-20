<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Services\Frontend\OrderService;
use Cart;

class OrderController extends Controller
{
     /**
     * @var orderService
     */
    private $orderService;

    public function __construct(OrderService $orderService)
    {
       $this->orderService = $orderService;
    }

    /**
     * create for the order.
     *
     * @return view
     */
    public function create()
    {
        $content = Cart::getContent();
        $total = Cart::getSubTotal();
        return view('products.checkout',['content' => $content, 'total' => $total]);
    }
    /**
     * store for the product.
     *
     * @param \Illuminate\Http\Request  $request
     * @return route
     */
    public function store(OrderRequest $request, $id)
    {
        $result = $this->orderService->handleCreateOrder($request);
        if ($result) {
            $destroy = Cart::getContent();
            foreach ($destroy as $value) {
                Cart::remove($value->id);
            }
            return redirect()->route('home.index')->with('success','The product is successful');
        }
        return redirect()->route('home.index')->with('failed','The product is failed');
    }
}
