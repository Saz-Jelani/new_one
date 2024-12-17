@extends('front-end.master')

@section('title','product details page')

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
                    <h2 class="name" >{{$product->category->name}}</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <h2 class="name" >{{$product->subCategory->name}}</h2>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Category Section Start -->
    <section class="wow fadeInUp">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="slider-5_1 no-space shop-box no-arrow">
                        <div>
                            <div class="shop-category-box">
                                <a href="{{asset('/')}}product-category/82">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Vegetables & Fruit...</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="http://localhost:8080/new_one/public/product-category/85">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/cup.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Beverages</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="http://localhost:8080/new_one/public/product-category/86">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/meats.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Meats & Seafood</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="http://localhost:8080/new_one/public/product-category/84">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/breakfast.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Breakfast</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="http://localhost:8080/new_one/public/product-category/88">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/frozen.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Frozen Foods</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="http://localhost:8080/new_one/public/product-category/83">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/milk.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Milk & Dairies</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/pet.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Pet Food</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/biscuit.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Biscuits & Snacks</h6>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="shop-category-box">
                                <a href="shop-left-sidebar.html">
                                    <div class="shop-category-image">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/grocery.svg" class="blur-up lazyload" alt="">
                                    </div>
                                    <div class="category-box-name">
                                        <h6>Grocery & Staples</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->


    <!-- Product Left Sidebar Start -->
    <section class="product-section">
        <div class="container-fluid-lg">

            <form action="{{route('cart.add')}}" method="post">
                @csrf
                <input type="hidden" value="{{$product->id}}" name="id">
            <div class="row ">
                <div class="col-xl-6">
                    <div class="product-left-box">
                        <div class="row g-sm-4 g-2">
                            <div class="col-6 col-grid-box wow fadeInUp">
                                <div class="slider-image">
                                    <img src="{{asset($product->image)}}" id="img-1"
                                         data-zoom-image="{{asset($product->image)}}"
                                          class="img-fluid image_zoom_cls-0 blur-up lazyload" alt="" style="width: 290px; height: 390px;">
                                </div>
                            </div>
                            @foreach($product->otherImage as $otherImage)
                            <div class="col-6 col-grid-box wow fadeInUp" data-wow-delay="0.05s">
                                <div class="slider-image">
                                    <img src="{{asset($otherImage->image)}}" id="img-2"
                                         data-zoom-image="{{asset($otherImage->image)}}"
                                       class="img-fluid image_zoom_cls-1 blur-up lazyload" alt="" style="width: 290px; height:390px;">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="right-box-contain p-sticky wow fadeInUp">

                        <h2 class="product-contain">{{$product->name}}</h2>
                        <div  class="product-title">
                        <h5 class="name" > Category : {{$product->category->name}}</h5>
                        </div>
                        <div class="price-rating">
                            <h3 class="theme-color price">Discount Price : {{$product->selling_price}}Tk<h3>Regular Price : <del class="text-content" >{{$product->regular_price}}</del>Tk </h3><span
                                    class="offer theme-color"></span></h3>

                        </div>

                        <div class="product-contain">
                            <p>{{$product->short_description}}
                            </p>
                        </div>

                        <div class="product-package">
                            <div class="product-title">
                                <h4>Quantity ({{$product->unit->name}})</h4>
                               
                            </div>
                            <ul name="qty" class="select-package">
                                <div class="form-group quantity">
                                    <input type="number" name="qty" class="form-control" value="1" min="1"/>
                                </div>
                                <!-- <p>{{$product->unit->name}}</p> -->
                            </ul>
                        </div>
                        <div class="note-box product-package">
                          <button type="submit"
                                    class="btn btn-md bg-dark cart-button text-white w-100">Add To Cart</button>
                        </div>


                        <div class="payment-option">
                            <div class="product-title">
                                <h4>Guaranteed Safe Checkout</h4>
                            </div>
                            <ul>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/1.svg" class="blur-up lazyload"
                                             alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/2.svg" class="blur-up lazyload"
                                             alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/3.svg" class="blur-up lazyload"
                                             alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/4.svg" class="blur-up lazyload"
                                             alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/images/product/payment/5.svg" class="blur-up lazyload"
                                             alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            </form>
                <div class="col-12">
                    <div class="product-section-box">
                        <ul class="nav nav-tabs custom-nav" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                        data-bs-target="#description" type="button" role="tab">Description</button>
                            </li>

                            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info"
                                        type="button" role="tab">Additional info</button>
                            </li> -->

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="care-tab" data-bs-toggle="tab" data-bs-target="#care"
                                        type="button" role="tab">Care Instructions</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                        type="button" role="tab">Review</button>
                            </li>
                        </ul>

                        <div class="tab-content custom-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                <div class="product-description">
                                    <div class="nav-desh">
                                        <p>{!!$product->long_description !!}</p>
                                    </div>

                                    <!-- <div class="nav-desh">
                                        <div class="desh-title">
                                            <h5>Organic:</h5>
                                        </div>
                                        <p>vitae et leo duis ut diam quam nulla porttitor massa id neque aliquam
                                            vestibulum morbi blandit cursus risus at ultrices mi tempus imperdiet nulla
                                            malesuada pellentesque elit eget gravida cum sociis natoque penatibus et
                                            magnis dis parturient montes nascetur ridiculus mus mauris vitae ultricies
                                            leo integer malesuada nunc vel risus commodo viverra maecenas accumsan lacus
                                            vel facilisis volutpat est velit egestas dui id ornare arcu odio ut sem
                                            nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est ultricies
                                            integer quis auctor elit sed vulputate mi sit amet mauris commodo quis
                                            imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper
                                            malesuada proin libero nunc consequat interdum varius sit amet mattis
                                            vulputate enim nulla aliquet porttitor lacus luctus accumsan.</p>
                                    </div> -->

                                    <div class="banner-contain nav-desh">
                                        <img src="{{asset('/')}}front-end-assets/assets/images/vegetable/banner/14.jpg"
                                             class="bg-img blur-up lazyload" alt="">
                                        <div class="banner-details p-center banner-b-space w-100 text-center">
                                            <div>
                                                <h6 class="ls-expanded theme-color mb-sm-3 mb-1">SUMMER</h6>
                                                <h2>AlU</h2>
                                                <p class="mx-auto mt-1">Save up to 5% OFF</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="tab-pane fade" id="info" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table info-table">
                                        <tbody>
                                        <tr>
                                            <td>Specialty</td>
                                            <td>Vegetarian</td>
                                        </tr>
                                        <tr>
                                            <td>Ingredient Type</td>
                                            <td>Vegetarian</td>
                                        </tr>
                                        <tr>
                                            <td>Brand</td>
                                            <td>Lavian Exotique</td>
                                        </tr>
                                        <tr>
                                            <td>Form</td>
                                            <td>Bar Brownie</td>
                                        </tr>
                                        <tr>
                                            <td>Package Information</td>
                                            <td>Box</td>
                                        </tr>
                                        <tr>
                                            <td>Manufacturer</td>
                                            <td>Prayagh Nutri Product Pvt Ltd</td>
                                        </tr>
                                        <tr>
                                            <td>Item part number</td>
                                            <td>LE 014 - 20pcs Crème Bakes (Pack of 2)</td>
                                        </tr>
                                        <tr>
                                            <td>Net Quantity</td>
                                            <td>40.00 count</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->

                            <div class="tab-pane fade" id="care" role="tabpanel">
                                <div class="information-box">
                                    <ul>
                                        <li>Store this product in a refrigerator.This should be
                                            stored in an air conditioned environment.</li>

                                        <li>Slice and serve the product at room temperature and make sure
                                            it is not exposed to heat.</li>

                                        <li>Use a serrated knife to cut a Product.</li>

                                        <li>Sculptural elements and figurines may contain wire supports
                                            or toothpicks or wooden skewers for support.</li>

                                        <li>Please check the placement of these items before serving to
                                            small children.</li>

                                        <li>The product should be consumed within 72 hours.</li>

                                        <li>Enjoy your product!</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="review" role="tabpanel">
                                <div class="review-box">
                                    <div class="row">
                                        <div class="col-xl-5">
                                            <div class="product-rating-box">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="product-main-rating">
                                                            <h2>3.40
                                                                <i data-feather="star"></i>
                                                            </h2>

                                                            <h5>5 Overall Rating</h5>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12">
                                                        <ul class="product-rating-list">
                                                            <li>
                                                                <div class="rating-product">
                                                                    <h5>5<i data-feather="star"></i></h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" style="width: 40%;">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="total">2</h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-product">
                                                                    <h5>4<i data-feather="star"></i></h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" style="width: 20%;">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="total">1</h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-product">
                                                                    <h5>3<i data-feather="star"></i></h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" style="width: 0%;">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="total">0</h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-product">
                                                                    <h5>2<i data-feather="star"></i></h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" style="width: 20%;">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="total">1</h5>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="rating-product">
                                                                    <h5>1<i data-feather="star"></i></h5>
                                                                    <div class="progress">
                                                                        <div class="progress-bar" style="width: 20%;">
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="total">1</h5>
                                                                </div>
                                                            </li>

                                                        </ul>

                                                        <div class="review-title-2">
                                                            <h4 class="fw-bold">Review this product</h4>
                                                            <p>Let other customers know what you think</p>
                                                            <button class="btn" type="button" data-bs-toggle="modal"
                                                                    data-bs-target="#writereview">Write a review</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-7">
                                            <div class="review-people">
                                                <ul class="review-list">
                                                    <li>
                                                        <div class="people-box">
                                                            <div>
                                                                <div class="people-image people-text">
                                                                    <img alt="user" class="img-fluid "
                                                                         src="{{asset('/')}}front-end-assets/assets/images/review/1.jpg">
                                                                </div>
                                                            </div>
                                                            <div class="people-comment">
                                                                <div class="people-name"><a href="javascript:void(0)"
                                                                                            class="name">Jack Doe</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content"> 29 Sep 2023 06:40:PM
                                                                        </h6>
                                                                        <div class="product-rating">
                                                                            <ul class="rating">
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <p>Avoid this product. The quality is terrible, and
                                                                        it started falling apart almost immediately. I
                                                                        wish I had read more reviews before buying.
                                                                        Lesson learned.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="people-box">
                                                            <div>
                                                                <div class="people-image people-text">
                                                                    <img alt="user" class="img-fluid "
                                                                         src="{{asset('/')}}front-end-assets/assets/images/review/2.jpg">
                                                                </div>
                                                            </div>
                                                            <div class="people-comment">
                                                                <div class="people-name"><a href="javascript:void(0)"
                                                                                            class="name">Jessica
                                                                        Miller</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content"> 29 Sep 2023 06:34:PM
                                                                        </h6>
                                                                        <div class="product-rating">
                                                                            <div class="product-rating">
                                                                                <ul class="rating">
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                           class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                           class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                           class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"
                                                                                           class="fill"></i>
                                                                                    </li>
                                                                                    <li>
                                                                                        <i data-feather="star"></i>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <p>Honestly, I regret buying this item. The quality
                                                                        is subpar, and it feels like a waste of money. I
                                                                        wouldn't recommend it to anyone.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="people-box">
                                                            <div>
                                                                <div class="people-image people-text">
                                                                    <img alt="user" class="img-fluid "
                                                                         src="{{asset('/')}}front-end-assets/assets/images/review/3.jpg">
                                                                </div>
                                                            </div>
                                                            <div class="people-comment">
                                                                <div class="people-name"><a href="javascript:void(0)"
                                                                                            class="name">Rome Doe</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content"> 29 Sep 2023 06:18:PM
                                                                        </h6>
                                                                        <div class="product-rating">
                                                                            <ul class="rating">
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                      class="fill"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <p>I am extremely satisfied with this purchase. The
                                                                        item arrived promptly, and the quality is
                                                                        exceptional. It's evident that the makers paid
                                                                        attention to detail. Overall, a fantastic buy!
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="people-box">
                                                            <div>
                                                                <div class="people-image people-text">
                                                                    <img alt="user" class="img-fluid "
                                                                         src="{{asset('/')}}front-end-assets/assets/images/review/4.jpg">
                                                                </div>
                                                            </div>
                                                            <div class="people-comment">
                                                                <div class="people-name"><a href="javascript:void(0)"
                                                                                            class="name">Sarah
                                                                        Davis</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content"> 29 Sep 2023 05:58:PM
                                                                        </h6>
                                                                        <div class="product-rating">
                                                                            <ul class="rating">
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <p>I am genuinely delighted with this item. It's a
                                                                        total winner! The quality is superb, and it has
                                                                        added so much convenience to my daily routine.
                                                                        Highly satisfied customer!</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="people-box">
                                                            <div>
                                                                <div class="people-image people-text">
                                                                    <img alt="user" class="img-fluid "
                                                                         src="{{asset('/')}}front-end-assets/assets/images/review/5.jpg">
                                                                </div>
                                                            </div>
                                                            <div class="people-comment">
                                                                <div class="people-name"><a href="javascript:void(0)"
                                                                                            class="name">John Doe</a>
                                                                    <div class="date-time">
                                                                        <h6 class="text-content"> 29 Sep 2023 05:22:PM
                                                                        </h6>
                                                                        <div class="product-rating">
                                                                            <ul class="rating">
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"
                                                                                       class="fill"></i>
                                                                                </li>
                                                                                <li>
                                                                                    <i data-feather="star"></i>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="reply">
                                                                    <p>Very impressed with this purchase. The item is of
                                                                        excellent quality, and it has exceeded my
                                                                        expectations.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <!-- Product Left Sidebar End -->


    <!-- Related Product Section Start -->
    <section class="product-list-section section-b-space">
        <!-- <div class="container-fluid-lg">
            <div class="title">
                <h2>Related Products</h2>
                <span class="title-leaf">
                    <svg class="icon-width">
                        <use xlink:href="https://themes.pixelstrap.com/fastkart/assets/svg/leaf.svg#leaf"></use>
                    </svg>
                </span>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider-5_1 product-wrapper">
                        <div>
                            <div class="product-box-3 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-2.html">
                                            <img src="{{asset('/')}}front-end-assets/assets/images/cake/product/11.png"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Cake</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Chocolate Chip Cookies 250 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(5.0)</span>
                                        </div>
                                        <h6 class="unit">500 G</h6>
                                        <h5 class="price"><span class="theme-color">$10.25</span> <del>$12.57</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                            data-type="minus" data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                           name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                            data-type="plus" data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.05s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('/')}}front-end-assets/assets/images/cake/product/2.png"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(4.0)</span>
                                        </div>
                                        <h6 class="unit">250 ml</h6>
                                        <h5 class="price"><span class="theme-color">$08.02</span> <del>$15.15</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                            data-type="minus" data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                           name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                            data-type="plus" data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('/')}}front-end-assets/assets/images/cake/product/3.png"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Peanut Butter Bite Premium Butter Cookies 600 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(2.4)</span>
                                        </div>
                                        <h6 class="unit">350 G</h6>
                                        <h5 class="price"><span class="theme-color">$04.33</span> <del>$10.36</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                            data-type="minus" data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                           name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                            data-type="plus" data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.15s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('/')}}front-end-assets/assets/images/cake/product/4.png"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Snacks</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">SnackAmor Combo Pack of Jowar Stick and Jowar Chips</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                            </ul>
                                            <span>(5.0)</span>
                                        </div>
                                        <h6 class="unit">570 G</h6>
                                        <h5 class="price"><span class="theme-color">$12.52</span> <del>$13.62</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                            data-type="minus" data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                           name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                            data-type="plus" data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('/')}}front-end-assets/assets/images/cake/product/5.png"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Snacks</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Yumitos Chilli Sprinkled Potato Chips 100 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(3.8)</span>
                                        </div>
                                        <h6 class="unit">100 G</h6>
                                        <h5 class="price"><span class="theme-color">$10.25</span> <del>$12.36</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                            data-type="minus" data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                           name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                            data-type="plus" data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.25s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('/')}}front-end-assets/assets/images/cake/product/6.png"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fantasy Crunchy Choco Chip Cookies</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(4.0)</span>
                                        </div>

                                        <h6 class="unit">550 G</h6>

                                        <h5 class="price"><span class="theme-color">$14.25</span> <del>$16.57</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                            data-type="minus" data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                           name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                            data-type="plus" data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="product-box-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="product-left-thumbnail.html">
                                            <img src="{{asset('/')}}front-end-assets/assets/images/cake/product/7.png" class="img-fluid" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                   data-bs-target="#view">
                                                    <i data-feather="eye"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Compare">
                                                <a href="compare.html">
                                                    <i data-feather="refresh-cw"></i>
                                                </a>
                                            </li>

                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                                <a href="wishlist.html" class="notifi-wishlist">
                                                    <i data-feather="heart"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-footer">
                                    <div class="product-detail">
                                        <span class="span-name">Vegetable</span>
                                        <a href="product-left-thumbnail.html">
                                            <h5 class="name">Fresh Bread and Pastry Flour 200 g</h5>
                                        </a>
                                        <div class="product-rating mt-2">
                                            <ul class="rating">
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star" class="fill"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                                <li>
                                                    <i data-feather="star"></i>
                                                </li>
                                            </ul>
                                            <span>(3.8)</span>
                                        </div>

                                        <h6 class="unit">1 Kg</h6>

                                        <h5 class="price"><span class="theme-color">$12.68</span> <del>$14.69</del>
                                        </h5>
                                        <div class="add-to-cart-box bg-white">
                                            <button class="btn btn-add-cart addcart-button">Add
                                                <span class="add-icon bg-light-gray">
                                                    <i class="fa-solid fa-plus"></i>
                                                </span>
                                            </button>
                                            <div class="cart_qty qty-box">
                                                <div class="input-group bg-white">
                                                    <button type="button" class="qty-left-minus bg-gray"
                                                            data-type="minus" data-field="">
                                                        <i class="fa fa-minus"></i>
                                                    </button>
                                                    <input class="form-control input-number qty-input" type="text"
                                                           name="quantity" value="0">
                                                    <button type="button" class="qty-right-plus bg-gray"
                                                            data-type="plus" data-field="">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- Related Product Section End -->





@endsection
