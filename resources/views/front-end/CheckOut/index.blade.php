@extends('front-end.master')

@section('title','CheckOut page')

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
                        <h2>Checkout Form</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">

                                    </a>
                                </li>
                                <h6 >Checkout</h6>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout section Start -->
    <form action="{{ route('new.order') }}" method="post">
        @csrf
    <section class="checkout-section-2 section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">
                <div class="col-lg-8">
                    <div class="left-sidebar-checkout">
                        <div class="checkout-detail-box">
                            <ul>
                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/ggihhudh.json"
                                                   trigger="loop-on-hover"
                                                   colors="primary:#121331,secondary:#646e78,tertiary:#0baf9a"
                                                   class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title" >
                                            <h4>Your Personal Details</h4>
                                        </div>

                                        <div class="accordion-item">
                                            <div class="accordion-header" id="flush-headingFive">
                                                <div class="accordion-button collapsed"
                                                     data-bs-toggle="collapse"
                                                     data-bs-target="#flush-collapseFive">
                                                    <div class="custom-form-check form-check mb-0">
                                                        <h5 class="form-check-label" for="Details">
                                                            <input
                                                                class="form-check-input mt-0" type="radio"
                                                                name="Details" id="Details" checked>

                                                            Set Your Details </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="flush-collapseFive" class=""
                                                 data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <div class="row g-2">
                                                        <div class="col-12">
                                                            <div class="payment-method">
                                                                <div
                                                                    class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                    @if(isset($customer->name))
                                                                    <input type="text" class="form-control"
                                                                           value="{{$customer->name}}"
                                                                           id="Details2"
                                                                           placeholder="Full Name" readonly name="name"/>
                                                                    <label for="Details">Full Name
                                                                        </label>
                                                                    @else
                                                                        <input type="text" class="form-control"
                                                                               id="Details2"
                                                                              required placeholder="Full Name" name="name"/>
                                                                        <label for="Details">Full Name
                                                                        </label>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xxl-6">
                                                            <div
                                                                class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                @if(isset($customer->email))
                                                                <input type="text" class="form-control"
                                                                       value="{{$customer->email}}" placeholder="Email Address" readonly name="email"/>
                                                                <label for="expiry">Email Address</label>
                                                                @else
                                                                    <input type="text" class="form-control"
                                                                           id="expiry" placeholder="Email Address" name="email"/>
                                                                    <label for="expiry">Email Address</label>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="col-xxl-6">
                                                            <div
                                                                class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                @if(isset($customer->mobile))
                                                                <input type="number" class="form-control" id="cvv"
                                                                       value="{{$customer->mobile}}"
                                                                       placeholder="Phone Number"  readonly name="mobile" />
                                                                <label for="cvv">Phone Number</label>
                                                                @else
                                                                    <input type="number" class="form-control" id="cvv"
                                                                           placeholder="Phone Number"  name="mobile"/>
                                                                    <label for="cvv">Phone Number</label>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="col-xxl-12">
                                                            <div
                                                                class="form-floating mb-lg-3 mb-2 theme-form-floating">
                                                                @if(isset($customer->delivery_address))
                                                                <textarea type="text" class="form-control"
                                                                          id="password" placeholder="Delivery Address" name="delivery_address">{{$customer->address}}</textarea>
                                                                <label for="password">Delivery Address</label>
                                                                @else
                                                                    <textarea type="text" class="form-control"
                                                                           id="password" placeholder="Delivery Address" name="delivery_address"></textarea>
                                                                    <label for="password">Delivery Address</label>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <li>
                                    <div class="checkout-icon">
                                        <lord-icon target=".nav-item" src="https://cdn.lordicon.com/qmcsqnle.json"
                                                   trigger="loop-on-hover" colors="primary:#0baf9a,secondary:#0baf9a"
                                                   class="lord-icon">
                                        </lord-icon>
                                    </div>
                                    <div class="checkout-box">
                                        <div class="checkout-title">
                                            <h4>Payment Option</h4>
                                        </div>

                                        <div class="checkout-detail">
                                            <div class="accordion accordion-flush custom-accordion"
                                                 id="accordionFlushExample">
                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingFour">
                                                        <div class="accordion-button collapsed"
                                                             data-bs-toggle="collapse"
                                                             data-bs-target="#flush-collapseFour">
                                                            <div class="custom-form-check form-check mb-0">

                                                                <label class="form-check-label" for="cash"><input
                                                                        class="form-check-input mt-0" type="radio"
                                                                        id="cash"
                                                                        checked name="payment_method" value="Cash"/>
                                                                    Cash On Delivery</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseFour"
                                                         class="accordion-collapse collapse show"
                                                         data-bs-parent="#accordionFlushExample">
{{--                                                        <div class="accordion-body">--}}
{{--                                                            <p class="cod-review">Pay digitally with SMS Pay--}}
{{--                                                                Link. Cash may not be accepted in COVID restricted--}}
{{--                                                                areas. <a href="javascript:void(0)">Know more.</a>--}}
{{--                                                            </p>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                </div>

{{--                                                <div class="accordion-item">--}}
{{--                                                    <div class="accordion-header" id="flush-headingOne">--}}
{{--                                                        <div class="accordion-button collapsed"--}}
{{--                                                             data-bs-toggle="collapse"--}}
{{--                                                             data-bs-target="#flush-collapseOne">--}}
{{--                                                            <div class="custom-form-check form-check mb-0">--}}
{{--                                                                <label class="form-check-label" for="credit"><input--}}
{{--                                                                        class="form-check-input mt-0" type="radio"--}}
{{--                                                                        id="credit"--}}
{{--                                                                        name="payment_method" value="Online"/>--}}
{{--                                                                    Credit or Debit Card</label>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div id="flush-collapseOne" class="accordion-collapse collapse"--}}
{{--                                                         data-bs-parent="#accordionFlushExample">--}}
{{--                                                        <div class="accordion-body">--}}
{{--                                                            <div class="row g-2">--}}
{{--                                                                <div class="col-12">--}}
{{--                                                                    <div class="payment-method">--}}
{{--                                                                        <div--}}
{{--                                                                            class="form-floating mb-lg-3 mb-2 theme-form-floating">--}}
{{--                                                                            <input type="text" class="form-control"--}}
{{--                                                                                   id="credit2"--}}
{{--                                                                                   placeholder="Enter Credit & Debit Card Number">--}}
{{--                                                                            <label for="credit2">Enter Credit & Debit--}}
{{--                                                                                Card Number</label>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                                <div class="col-xxl-4">--}}
{{--                                                                    <div--}}
{{--                                                                        class="form-floating mb-lg-3 mb-2 theme-form-floating">--}}
{{--                                                                        <input type="text" class="form-control"--}}
{{--                                                                               id="expiry" placeholder="Enter Expiry Date">--}}
{{--                                                                        <label for="expiry">Expiry Date</label>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                                <div class="col-xxl-4">--}}
{{--                                                                    <div--}}
{{--                                                                        class="form-floating mb-lg-3 mb-2 theme-form-floating">--}}
{{--                                                                        <input type="text" class="form-control" id="cvv"--}}
{{--                                                                               placeholder="Enter CVV Number">--}}
{{--                                                                        <label for="cvv">CVV Number</label>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                                <div class="col-xxl-4">--}}
{{--                                                                    <div--}}
{{--                                                                        class="form-floating mb-lg-3 mb-2 theme-form-floating">--}}
{{--                                                                        <input type="password" class="form-control"--}}
{{--                                                                               id="password" placeholder="Enter Password">--}}
{{--                                                                        <label for="password">Password</label>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                                <div class="button-group mt-0">--}}
{{--                                                                    <ul>--}}
{{--                                                                        <li>--}}
{{--                                                                            <button--}}
{{--                                                                                class="btn btn-light shopping-button">Cancel</button>--}}
{{--                                                                        </li>--}}

{{--                                                                        <li>--}}
{{--                                                                            <button class="btn btn-animation">Use This--}}
{{--                                                                                Card</button>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}

                                                <div class="accordion-item">
                                                    <div class="accordion-header" id="flush-headingThree">
                                                        <div class="accordion-button collapsed"
                                                             data-bs-toggle="collapse"
                                                             data-bs-target="#flush-collapseThree">
                                                            <div class="custom-form-check form-check mb-0">
                                                                <label class="form-check-label" for="wallet"><input
                                                                        class="form-check-input mt-0" type="radio"
                                                                        name="payment_method" value="Online" id="wallet">My
                                                                    Wallet</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                         data-bs-parent="#accordionFlushExample">
                                                        <div class="accordion-body">


{{--                                                            <div class="row">--}}
{{--                                                                <div class="col-md-4">--}}
{{--                                                                    <div class="custom-form-check form-check">--}}
{{--                                                                        <label class="form-check-label"--}}
{{--                                                                               for="amazon"><input--}}
{{--                                                                                class="form-check-input mt-0"--}}
{{--                                                                                type="radio" name="payment_method" value="Online"--}}
{{--                                                                                id="amazon">Bkash</label>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-md-4">--}}
{{--                                                                    <div class="custom-form-check form-check">--}}
{{--                                                                        <label class="form-check-label"--}}
{{--                                                                               for="amazon"><input--}}
{{--                                                                                class="form-check-input mt-0"--}}
{{--                                                                                type="radio" name="payment_method" value="Online"--}}
{{--                                                                                id="amazon">Nogod</label>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}
{{--                                                                <div class="col-md-4">--}}
{{--                                                                    <div class="custom-form-check form-check">--}}
{{--                                                                        <label class="form-check-label"--}}
{{--                                                                               for="amazon"><input--}}
{{--                                                                                class="form-check-input mt-0"--}}
{{--                                                                                type="radio" name="payment_method" value="Online"--}}
{{--                                                                                id="amazon">Upay</label>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}


{{--                                                            </div>--}}

                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="button-group mt-6">
                                    <div class="">
                                        <ul>
{{--                                            <li>--}}
{{--                                                <button--}}
{{--                                                    class="btn btn-light shopping-button">Cancel</button>--}}
{{--                                            </li>--}}

{{--                                            <li>--}}
{{--                                                <button class="btn btn-animation">Save & Continue</button>--}}
{{--                                            </li>--}}
                                        </ul>
                                    </div>
                                    </div>

                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="right-side-summery-box">

                        <div class="summery-box-2">

                            <div class="summery-header">
                                <h3>Order Summery</h3>
                            </div>

                            <ul class="summery-contain">
                                @foreach(Cart::content() as $cartProduct)
                                <li>
                                    <img src=" {{asset($cartProduct->options->image)}}"
                                         class="img-fluid blur-up lazyloaded checkout-image" alt="#">
                                    <h4> {{$cartProduct->name}} - <span> ({{$cartProduct->qty}} X {{$cartProduct->price}}) </span></h4>
                                    <h4 class="price">{{ round($cartProduct->subtotal) }} Tk</h4>
                                </li>
                                @endforeach
                            </ul>

                            <ul class="summery-total">
                                <li>
                                    <h4>Subtotal :</h4>
                                    <h4 class="price">{{ $sum =Session::get('sum') }} Tk</h4>
                                    <input type="hidden" value="{{ $sum }}" name="sub_total">
                                </li>

                                <li>
                                    <h4>Shipping :</h4>
                                    <h4 class="price">{{$shipping = 100}} Tk</h4>
                                    <input type="hidden" value="{{ $shipping }}" name="shipping_total">
                                </li>

                                <li>
                                    <h4>Tax total :</h4>
                                    <h4 class="price">{{ $tax = round($sum*0.15) }} Tk</h4>
                                    <input type="hidden" value="{{ $tax }}" name="tax_total">
                                </li>


                                <li class="list-total">

                                    <h4>Total (Taka) :</h4>
                                    <h4 class="price">{{ $orderTotal=$sum+$tax+$shipping }} Tk</h4>
                                    <input type="hidden" value="{{ $orderTotal }}" name="order_total">

                                </li>

                            </ul>
                        </div>

                        <div class="checkout-offer">
                            <div class="offer-title">
                                <div class="offer-icon">
                                    <img src="https://themes.pixelstrap.com/fastkart/assets/images/inner-page/offer.svg" class="img-fluid" alt="">
                                </div>
                                <div class="offer-name">
                                    <h6>Available Offers</h6>
                                </div>
                            </div>

                            <ul class="offer-detail">
                                <li>
                                    <p>Combo: BB Royal Almond/Badam Californian, Extra Bold 100 gm...</p>
                                </li>
                                <li>
                                    <p>combo: Royal Cashew Californian, Extra Bold 100 gm + BB Royal Honey 500 gm</p>
                                </li>
                            </ul>
                        </div>

                        <button  type="submit" class="btn theme-bg-color text-white btn-md w-100 mt-4 fw-bold">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </form>
    <!-- Checkout section End -->




@endsection

