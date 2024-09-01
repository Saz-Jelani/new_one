@extends('front-end.master')

@section('title','product Category page')

@section('body')


    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0 " >
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        
                        <h2>Shop Category</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <h2>Shop Category</h2>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Start -->
    <section class="section-b-space shop-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-custom-3">
                    <div class="left-box wow fadeInUp">
                        <div class="shop-left-sidebar">
                            <ul class="nav nav-pills mb-3 custom-nav-tab" id="pills-tab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-vegetables" data-bs-toggle="pill"
                                            data-bs-target="#pills-vegetable" type="button" role="tab">Vegetables & Fruit
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg" class="blur-up lazyload"
                                             alt=""></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link " id="pills-beverages" data-bs-toggle="pill"
                                            data-bs-target="#pills-beverages" type="button" role="tab">Beverages <img
                                            src="https://themes.pixelstrap.com/fastkart/assets/svg/1/cup.svg" class="blur-up lazyload"
                                            alt=""></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-meat" data-bs-toggle="pill"
                                            data-bs-target="#pills-meat" type="button" role="tab">Meats & Seafood <img
                                            src="https://themes.pixelstrap.com/fastkart/assets/svg/1/meats.svg" alt="" class="blur-up lazyload"></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-dairy" data-bs-toggle="pill"
                                            data-bs-target="#pills-dairy" type="button" role="tab">Breakfast & Dairy <img
                                            src="https://themes.pixelstrap.com/fastkart/assets/svg/1/breakfast.svg" class="blur-up lazyload"
                                            alt=""></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-frozen" data-bs-toggle="pill"
                                            data-bs-target="#pills-frozen" type="button" role="tab">Frozen Foods <img
                                            src="https://themes.pixelstrap.com/fastkart/assets/svg/1/frozen.svg" class="blur-up lazyload" alt=""></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-snack" data-bs-toggle="pill"
                                            data-bs-target="#pills-snack" type="button" role="tab">Biscuits & Snacks <img
                                            src="https://themes.pixelstrap.com/fastkart/assets/svg/1/biscuit.svg" class="blur-up lazyload" alt=""></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-grocery" data-bs-toggle="pill"
                                            data-bs-target="#pills-grocery" type="button" role="tab">Grocery & Staples <img
                                            src="https://themes.pixelstrap.com/fastkart/assets/svg/1/grocery.svg" class="blur-up lazyload" alt=""></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-wines" data-bs-toggle="pill"
                                            data-bs-target="#pills-wines" type="button" role="tab">Wines & Alcohol Drinks
                                        <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/drink.svg" class="blur-up lazyload" alt=""></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-milk" data-bs-toggle="pill"
                                            data-bs-target="#pills-milk" type="button" role="tab">Milk & Dairies <img
                                            src="https://themes.pixelstrap.com/fastkart/assets/svg/1/milk.svg" alt="" class="blur-up lazyload"></button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-pet" data-bs-toggle="pill"
                                            data-bs-target="#pills-pet" type="button" role="tab">Pet Foods <img
                                            class="blur-up lazyload" src="https://themes.pixelstrap.com/fastkart/assets/svg/1/pet.svg" alt=""></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-custom-">
                    <div class="show-button">
                        <div class="filter-button d-inline-block d-lg-none">
                            <a><i class="fa-solid fa-filter"></i> Filter Menu</a>
                        </div>

                        <div class="top-filter-menu">
                            <div class="category-dropdown">
                                <h5 class="text-content">Sort By :</h5>
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                            data-bs-toggle="dropdown">
                                        <span>Most Popular</span> <i class="fa-solid fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" id="pop" href="javascript:void(0)">Popularity</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="low" href="javascript:void(0)">Low - High
                                                Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="high" href="javascript:void(0)">High - Low
                                                Price</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="rating" href="javascript:void(0)">Average
                                                Rating</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="aToz" href="javascript:void(0)">A - Z Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="zToa" href="javascript:void(0)">Z - A Order</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" id="off" href="javascript:void(0)">% Off - Hight To
                                                Low</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="grid-option d-none d-md-block">
                                <ul>
                                    <li class="three-grid">
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-3.svg" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                    <li class="grid-btn d-xxl-inline-block d-none active">
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid-4.svg"
                                                 class="blur-up lazyload d-lg-inline-block d-none" alt="">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/grid.svg"
                                                 class="blur-up lazyload img-fluid d-lg-none d-inline-block" alt="">
                                        </a>
                                    </li>
                                    <li class="list-btn">
                                        <a href="javascript:void(0)">
                                            <img src="https://themes.pixelstrap.com/fastkart/assets/svg/list.svg" class="blur-up lazyload" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <div
                        class="row g-sm-4 g-3 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 product-list-section">
                        @foreach($products as $product)
                        <div>
                            <div class="product-box-3 h-100 wow fadeInUp">
                                <div class="product-header">
                                    <div class="product-image">
                                        <a href="{{route('product-detail', ['id' => $product->id])}}">
                                            <img src="{{asset($product->image)}}"
                                                 class="img-fluid blur-up lazyload" alt="">
                                        </a>

                                        <ul class="product-option">
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <a href="{{route('product-detail', ['id' => $product->id])}}" data-bs-toggle="modal"
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
                                        <span class="span-name">{{$product->category->name}}</span>
                                        <h3>
                                        <a href="{{route('product-detail', ['id' => $product->id])}}">{{$product->name}}
                                        </a></h3>
                                        <p class="text-content mt-1 mb-2 product-content">Cheesy feet cheesy grin brie.
                                            Mascarpone cheese and wine hard cheese the big cheese everyone loves smelly
                                            cheese macaroni cheese croque monsieur.</p>

                                        <h7 class="unit">250 ml</h7>
                                        <h6 class="price">Regular Price : <del>{{$product->regular_price}} Tk</del>
                                        </h6>
                                        <h3>
                                           <span class="theme-color"> Offer Price : {{$product->selling_price}} Tk</span>
                                        </h3>
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
                        @endforeach

                    </div>

                    <nav class="custom-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)" tabindex="-1">
                                    <i class="fa-solid fa-angles-left"></i>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">
                                    <i class="fa-solid fa-angles-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->


@endsection
