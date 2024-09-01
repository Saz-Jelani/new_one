@extends('admin.master')
@section('title','Manage order ')

@section('body')

    <!-- page-wrapper Start-->



    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Container-fluid starts-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="title-header option-title d-sm-flex d-block">
                                    <h5>Order List</h5>
                                    <div class="right-options">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">import</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Export</a>
                                            </li>
                                            <li>
                                                <a class="btn btn-solid" href="add-new-product.html">Add Product</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <div class="table-responsive">
                                        <table class="table all-package theme-table table-product" id="table_id">
                                            <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">SL NO</th>
                                                <th class="wd-15p border-bottom-0">Customer Info</th>
                                                <th class="wd-15p border-bottom-0">Order Date</th>
                                                <th class="wd-20p border-bottom-0">Order Total</th>
                                                <th class="wd-15p border-bottom-0">Order Status</th>
                                                <th class="wd-10p border-bottom-0">Action</th>

                                            </tr>

                                            <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$order->customer->name.'( '.$order->customer->mobile.' )'}}</td>
                                                    <td>{{$order->order_date}}</td>
                                                    <td>{{$order->order_total}}</td>
                                                    <td>{{$order->order_status}}</td>


                                                    <td>
                                                        <ul>
                                                            <li>
                                                            <a href="{{route('order.invoice', ['id' => $order->id])}}" >
                                                                <i class="ri-printer-line"></i>
                                                            </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('order.detail', ['id' => $order->id])}}">
                                                                    <i class="ri-eye-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="{{route('order.edit', ['id' => $order->id])}}">
                                                                    <i class="ri-pencil-line"></i>
                                                                </a>
                                                            </li>

                                                            <li>
{{--                                                                <a href="{{route('order.delete', ['id' => $order->id])}}" onclick="return confirm('Are you sure to delete this..');" >--}}
                                                                    <i class="ri-delete-bin-line"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </td>

                                                </tr>

                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->


            <!-- page-wrapp

@endsection
