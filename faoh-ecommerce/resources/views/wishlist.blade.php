@extends('header-footer.top-bottom')

@section('pages')
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li class="active">Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Wishlist Area Strat-->
            <div class="wishlist-area pt-60 pb-60">
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
                                                <th class="li-product-stock-status">Stock Status</th>
                                                <th class="li-product-add-cart">add to cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="{{asset('./images/wishlist-thumb/bag 1.jpg')}}" alt="" style="width: 30%;"></a></td>
                                                <td class="li-product-name"><a href="#">Giro Civilia</a></td>
                                                <td class="li-product-price"><span class="amount">$23.39</span></td>
                                                <td class="li-product-stock-status"><span class="in-stock">in stock</span></td>
                                                <td class="li-product-add-cart"><a href="#">add to cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="{{asset('./images/wishlist-thumb/wallet 1.jpg')}}" alt="" style="width: 30%;"></a></td>
                                                <td class="li-product-name"><a href="#">Pro Bike Shoes</a></td>
                                                <td class="li-product-price"><span class="amount">$30.50</span></td>
                                                <td class="li-product-stock-status"><span class="in-stock">in stock</span></td>
                                                <td class="li-product-add-cart"><a href="#">add to cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="{{asset('./images/wishlist-thumb/beauty 1.jpg')}}" alt="" style="width: 30%;"></a></td>
                                                <td class="li-product-name"><a href="#">Nero Urban Shoes</a></td>
                                                <td class="li-product-price"><span class="amount">$40.19</span></td>
                                                <td class="li-product-stock-status"><span class="out-stock">out stock</span></td>
                                                <td class="li-product-add-cart"><a href="#">add to cart</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Wishlist Area End-->
            @endsection
