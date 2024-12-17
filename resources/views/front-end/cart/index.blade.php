@extends('front-end.master')

@section('title','Shopping Cart')

@section('body')

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-md-none d-block mobile-cart">
        <ul>
            <li class="active">
                <a href="index.html">
                    <i class="iconly-Home icli"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="mobile-category">
                <a href="javascript:void(0)">
                    <i class="iconly-Category icli js-link"></i>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="search.html" class="search-box">
                    <i class="iconly-Search icli"></i>
                    <span>Search</span>
                </a>
            </li>

            <li>
                <a href="wishlist.html" class="notifi-wishlist">
                    <i class="iconly-Heart icli"></i>
                    <span>My Wish</span>
                </a>
            </li>

            <li>
                <a href="cart.html">
                    <i class="iconly-Bag-2 icli fly-cate"></i>
                    <span>Cart</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Cart</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Cart</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Cart Section Start -->

    <section class="cart-section section-b-space">
        <p class="text-center text-success">{{session('message')}}</p>
        <div class="container-fluid-lg">
            <div class="row g-sm-5 g-3">
                <div class="col-xxl-9">
                    <div class="cart-table">
                        <div class="table-responsive-xl">
                            <table class="table">
                                <tbody>
                                @php($sum=0)
                                @foreach($cart_products as $cart_product)

                                <php? 

                                print_r($cart_products);
                                exit;
                                
                                ?>
                                <tr class="product-box-contain">
                                    <td class="product-detail">
                                        <div class="product border-0">
                                            <a href="product-left-thumbnail.html" class="product-image">
                                                <img src="{{asset($cart_product->options->image)}}"
                                                     class="img-fluid blur-up lazyload" alt="">
                                            </a>
                                            <div class="product-detail">
                                                <ul>
                                                    <li class="name">
                                                        <a href="product-left-thumbnail.html">{{$cart_product->name}}</a>
                                                    </li>
                                                  

                                                    <li class="text-content"><span class="text-title">Code : </span> {{$cart_product->options->code}}</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="price">
                                        <h4 class="table-title text-content">Unit Price</h4>
                                        <h3>{{$cart_product->price}} Tk</h3>

                                    </td>

                                    <td class="quantity">
                                        <h4 class="table-title text-content">Quantity Per </h4>  
                                        <h5 class="table-title text-content">(kg/litter/dozen) </h5>                   
                                        <div class="col-md-2 col-12">
                                            <form action="{{route('cart.update', ['row_id' => $cart_product->rowId])}}" method="POST">
                                                @csrf
                                                <div class="input-group">
                                                    <input type="number" class="form-control" name="qty" value="{{$cart_product->qty}}" min="1"/>
                                                    <li>
                                                    <button type="submit" class="  btn-success btn-lg " >Update</button>
                                                    </li>
                                      
                                                    
                                                </div>
                                            </form>
                                        </div>
                                    </td>

                                    <td class="subtotal">
                                        <h4 class="table-title text-content">Total</h4>
                                        <h5>{{round($cart_product->subtotal)}} Tk</h5>
                                    </td>

                                    <td class="save-remove">
                                        <h4 class="table-title text-content">Action</h4>
                                        <!-- <a class="save notifi-wishlist" href="javascript:void(0)">Save for later</a> -->
                                        <a class="remove close_button" href="{{route('cart.delete', ['row_id' => $cart_product->rowId])}}" onclick="return confirm('Are you sure to delete this item..')"><i class="lni lni-close"></i>Remove</a>
                                    </td>
                                </tr>
                                @php($sum = $sum + $cart_product->subtotal)
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xxl-3">
                    <div class="summery-box">
                        <div class="summery-header">
                            <h3>Cart Total</h3>
                        </div>

                        <div class="summery-contain">
                            <!-- <div class="coupon-cart">
                                <h6 class="text-content mb-2">Coupon Apply</h6>
                                <div class="mb-3 coupon-box input-group">
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                           placeholder="Enter Coupon Code Here...">
                                    <button class="btn-apply">Apply</button>
                                </div>
                            </div> -->
                            <ul>

                                <li>
                                    <h4>Cart Subtotal</h4>
                                    <h4 class="price">{{$sum}} Tk</h4>
                                </li>

                                <li class="align-items-start">
                                    <h4>Delivery Charge</h4>
                                    <h4 class="price text-end">{{$shipping = 50}} Tk</h4>
                                </li>

                                <li>
                                    <h4>Vat (5%)</h4>
                                    <h4 class="price">{{$tax = round($sum*0.05)}} Tk</h4>
                                </li>

                              
                            </ul>

                        </div>
                        <ul class="summery-total">
                            <li class="list-total border-top-0">
                                <h4>Total (Tk)</h4>
                                <h4 class="price theme-color">{{ $sum + $tax + $shipping}} Tk</h4>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <li></li>
                        <div class="button-group cart-button">
                            <ul>
                                <li>
                                    <a href="{{route('CheckOut')}}"
                                            class="btn btn-animation proceed-btn fw-bold">Process To Checkout</a>
                                </li>

                                <li>
                                    <button onclick="location.href = '{{route('home')}}';"
                                            class="btn btn-light shopping-button text-dark">
                                       Return To Shopping</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->
    <?php
    Session::put('sum',$sum);
    ?>
@endsection

