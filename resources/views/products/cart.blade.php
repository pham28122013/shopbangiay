@extends('products.master')
@section('content')

<div class="cart">
<section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{asset('./images/banner/banner-img.png')}}" alt="">
                </div>
            </div>
        </div>
</section>
<section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    @if($totalquantity == App\Models\User::INACTIVE)
                        <span> Trang giỏ hàng trống </span>
                    @else
                    <table class="table table-cart">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Delete</th>
                                <th scope="col">Update</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($content as $product)
                                    <tr>
                                        <td>
                                            <div class="media">
                                                <div class="d-flex">
                                                    <img src="{{ asset(config('define.product_images_path') .$product->attributes->img) }}" alt="">
                                                </div> 
                                            </div>
                                        </td>
                                        <td>
                                            <div class="media">
                                                <div class="media-body">
                                                    <p>{{$product->name}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h5><?php echo number_format($product->price)?> VNĐ</h5>
                                        </td>
                                        <td>
                                            <div class="product_count">
                                            <input class="quantity" type="number" value="{{$product->quantity}}" name="quantity">
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="product_price_{{$product->id}}">{{number_format($product->quantity*$product->price)}} VNĐ</h5>
                                        </td>
                                        <td>
                                            <a href="{{route('cart.delete', $product->id)}}">
                                                <img width="20px" src="{{asset('images/cart/delete.png')}}">
                                            </a>
                                        </td>
                                        <td>
                                            <a class="updatecart" id="{{$product->id}}" >
                                                <img width="25px" src="{{asset('images/cart/update.png')}}">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            <tr>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5 class="product_total_">{{number_format($total)}} VNĐ</h5>
                                </td>
                                <td>
                                    <a href="{{route('cart.destroy', $product->id)}}">
                                        <img width="20px" src="{{asset('images/cart/delete.png')}}">
                                    </a>
                                </td>
                            </tr>
                            <tr class="shipping_area">
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                
                                <td>
                                    <div class="shipping_box">
                                        <a class="gray_btn" href="{{route('order.create')}}">Pay</a>
                                    </div>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
