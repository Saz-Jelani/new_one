@extends('front-end.master')

@section('title',' Customer Dashboard  page')

@section('body')




    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Dashboard</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- log in section start -->
    <section class="">
        <div class="home-section-2 home-section-big section-b-space">
            <div class="row">
                <div class="col-xxl-6 col-xl-12 col-lg-12 d-lg-block d-none ms-auto">
                    <div class="account-login section">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h1>My Dashboard</h1>
                                    <div class="card mt-5">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start">
                                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">My Dashboard</button>
                                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-orders" type="button" role="tab" >My Orders</button>
                                                </div>
                                                <div class="tab-content" id="v-pills-tabContent">
                                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">My dashboard</div>
                                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">My profile</div>
                                                    <div class="tab-pane fade" id="v-pills-orders" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                                        <table class="table table-bordered table-hover">
                                                            <tr>
                                                                <th>sl</th>
                                                                <th>order no</th>
                                                                <th>order total</th>
                                                                <th>order status</th>
                                                                <th>action</th>
                                                            </tr>
                                                            @foreach($orders as $order)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>
                                                                        <a href="">{{ '000'.$order->id }}</a>
                                                                    </td>
                                                                    <td>{{ $order->order_total }} Tk</td>
                                                                    <td>{{ $order->order_status }}</td>
                                                                    <td>
                                                                        [<a href="{{route('order.invoice', ['id' => $order->id])}}">Details</a>]
                                            
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </table>
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
                <div class="col-xxl-5 col-xl-5 col-lg-6 d-lg-block d-none ms-auto">
                    <div class="image-contain">
                        <img src="{{asset('/')}}front-end-assets/assets/images/inner-page/sign-up.png" class="" alt="">
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- log in section end -->


@endsection
