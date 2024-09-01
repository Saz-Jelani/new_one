@extends('admin.master')
@section('title','Products ')

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
                                        <h5>Products List</h5>
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
                                                    <th class="wd-15p border-bottom-0">Name</th>
                                                    <th class="wd-15p border-bottom-0">code</th>
                                                    <th class="wd-20p border-bottom-0">Category</th>
                                                    <th class="wd-15p border-bottom-0">Image</th>
                                                    <th class="wd-10p border-bottom-0">Stock</th>
                                                    <th class="wd-10p border-bottom-0">Status</th>
                                                    <th class="wd-25p border-bottom-0">Action</th>
                                                </tr>

                                                <tbody>
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$product->name}}</td>
                                                        <td>{{$product->code}}</td>
                                                        <td>{{$product->category->name}}</td>
                                                        <td><img src="{{asset($product->image)}}" alt="" height="50" width="60"/></td>
                                                        <td>{{$product->stock_amount}}</td>
                                                        <td>{{$product->status == 1?'Published':'Unpublished'}}</td>


                                                <td>
                                                            <ul>
                                                                <li>
                                                                    <a href="{{route('product.detail', ['id' => $product->id])}}">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="{{route('product.edit', ['id' => $product->id])}}">
                                                                        <i class="ri-pencil-line"></i>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                     <a href="{{route('product.delete', ['id' => $product->id])}}" onclick="return confirm('Are you sure to delete this..');" >

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
