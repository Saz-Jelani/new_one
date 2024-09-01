@extends('admin.master')
@section('title','Details Order')

@section('body')
    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5> Add Product </h5>
                                    </div>


                                    <div class="card-body">
                                        <p class="text-muted">{{session('message')}}</p>
                                        <table class="table table-bordered table-hover">
                                            <tr>
                                                <th>Order Id</th>
                                                <td>{{$order->id}}</td>
                                            </tr>
                                            <tr>
                                                <th>Customer Name</th>
                                                <td>{{$order->customer->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>Customer Mobile</th>
                                                <td>{{$order->customer->mobile }}</td>
                                            </tr>
                                            <tr>
                                                <th>Customer Email </th>
                                                <td>{{$order->customer->email  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Delivery Address </th>
                                                <td>{{$order->delivery_address  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Payment Status </th>
                                                <td>{{$order->payment_status  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Payment Method </th>
                                                <td>{{$order->payment_method  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Product Info </th>
                                                <td>
                                                    <table class="table table-bordered table-hover">
                                                        <tr>
                                                            <th>Sl</th>
                                                            <th>Product Info</th>
                                                            <th>Unit Price</th>
                                                            <th>Qty</th>
                                                            <th>Total</th>
                                                        </tr>
                                                        @foreach($order->orderDetails as $orderDetail)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{!! '<b>Name:</b> '. $orderDetail->product_name.'<br/> <b>Code:</b>'.$orderDetail->product_code !!}</td>
                                                                <td>{{ $orderDetail->product_price }}</td>
                                                                <td>{{ $orderDetail->product_qty }}</td>
                                                                <td>{{ $orderDetail->product_price * $orderDetail->product_qty }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Tax Total </th>
                                                <td>{{$order->tax_total  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Shipping Total </th>
                                                <td>{{$order->shipping_total  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Order Total </th>
                                                <td>{{$order->order_total  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Order Status </th>
                                                <td>{{$order->order_status  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Delivery Date </th>
                                                <td>{{$order->delivery_date  }}</td>
                                            </tr>


                                            <tr>
                                                <th>Payment Date </th>
                                                <td>{{$order->payment_date  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Payment Timestamp </th>
                                                <td>{{$order->payment_timestamp  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Transaction Id </th>
                                                <td>{{$order->transaction_id  }}</td>
                                            </tr>
                                            <tr>
                                                <th>Currency </th>
                                                <td>{{$order->currency  }}</td>
                                            </tr>
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

    <!-- New Product Add End -->

    <!-- footer En -->


@endsection

