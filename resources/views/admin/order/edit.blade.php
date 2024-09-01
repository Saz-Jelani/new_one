@extends('admin.master')
@section('title',' Order Details edit')

@section('body')
    <div class="page-body">

        <!-- New Product Add Start -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Edit Order Form</h3>
                    </div>
                    <div class="card-body">
                        <p class="text">{{session('message')}}</p>

                        <form class="form-horizontal" action="{{route('order.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $order->id }}"/>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Customer Info</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="{{$order->customer->name}}" readonly/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Order Total</label>
                                <div class="col-md-9">
                                    <input class="form-control" type="text" value="{{$order->order_total}} Tk" readonly/>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Delivery Address</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="delivery_address">{{$order->delivery_address}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label  class="col-md-3 form-label">Courier Info</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="courier_id" >
                                        <option value="" disabled selected> Select Courier Info </option>
                                        <option value="1"> S A Paribahan </option>
                                        <option value="2"> Sundarban </option>
                                        <option value="3"> Korotoa </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">Order Status</label>
                                <div class="col-md-9">
                                    <label><input type="radio" name="order_status" {{ $order->order_status == 'Pending' ? 'checked' : ' ' }}  value="Pending"> Pending</label>
                                    <label><input type="radio" name="order_status" {{ $order->order_status == 'Processing' ? 'checked' : ' ' }} value="Processing"> Processing</label>
                                    <label><input type="radio" name="order_status" {{ $order->order_status == 'Complete' ? 'checked' : ' ' }} value="Complete"> Complete</label>
                                    <label><input type="radio" name="order_status" {{ $order->order_status == 'Cancel' ? 'checked' : ' ' }} value="Cancel"> Cancel</label>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Update Order Info</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- New Product Add End -->

    <!-- footer En -->


@endsection

