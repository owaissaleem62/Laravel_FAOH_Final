@extends('header-footer.top-bottom')

@section('pages')
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="active">Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Shopping Cart Area Strat-->
            <div class="Shopping-cart-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <th class="li-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="li-product-price">Unit Price</th>
                                                <th class="li-product-quantity">Quantity</th>
                                                <th class="li-product-subtotal">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $total = 0 @endphp
                                        @foreach(session('cart') as $id => $pro)
                                            @php
                                                // Calculate the total price for each product
                                         
                                                $image = isset($pro['image']) ? asset('images/' . $pro['image']) : '';
                                                $subtotal = $pro['price'] * $pro['quantity'];
                                                $total += $subtotal;
                                            @endphp
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#">@if($image)
                                                <img src="{{ asset('Uploadimages/' . $pro['image']) }}" alt="Li's Product Image" style="width: 30%;"></a>@endif</td>
                                                <td class="li-product-name"><a href="#">{{ $pro['Title'] }}</a></td>
                                                <td class="li-product-price"><span class="amount">{{number_format ($pro['price'],) }}</span></td>
                                                <td class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input class="cart-plus-minus-box" value="1" type="text">
                                                        <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                        <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal"><span class="amount">{{$subtotal =number_format ($pro['price'] * $pro['quantity'],)}}</span></td>
                                            </tr>
                                        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="coupon-all">
                                            <div class="coupon">
                                                <!-- <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text"> -->
                                                <input class="button" name="apply_coupon" value="Clear Cart" type="submit">
     
                                            </div>
                                            <div class="coupon2">
                                                <input class="button" name="update_cart" value="Update cart" type="submit">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5 ml-auto">
                                        <div class="cart-page-total">
                                            <h2>Cart totals</h2>
                                            <ul>
                                                <li>Subtotal <span>{{$subtotal =number_format ($pro['price'] * $pro['quantity'],)}}</span></li>
                                                <li>Total <span>{{$subtotal =number_format ($pro['price'] * $pro['quantity'],)}}</span></li>
                                            </ul>
                                            <a href="#">Proceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Shopping Cart Area End-->
            @endsection
