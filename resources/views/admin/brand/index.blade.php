@extends('admin.master')
@section('title','Manage Brand')

@section('body')
    <!-- Container-fluid starts-->
    <div class="page-body">
        <!-- All User Table Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>All Brand</h5>
                                <form class="d-inline-flex">
                                    <a href="add-new-brand.html"
                                       class="align-items-center btn btn-theme d-flex">
                                        <i data-feather="plus-square"></i>Add New
                                    </a>
                                </form>
                            </div>

                            <div class="table-responsive brand-table">
                                <p class="text-success text-center">{{session('message')}}</p>
                                <div>
                                    <table class="table all-package theme-table" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Brand Name</th>
                                            <th>Description</th>
                                            <th>Icon Image</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($brands as $brand)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>

                                                <td>{{$brand->name}}</td>
                                                <td>{{$brand->description}}</td>

                                                <td>
                                                    <img src="{{asset($brand->image)}}"
                                                         alt="" height="62" width="67"/>
                                                </td>

                                                {{--                                            <td>--}}
                                                {{--                                                <div class="brand-icon">--}}
                                                {{--                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg"--}}
                                                {{--                                                         class="img-fluid" alt="">--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </td>--}}

                                                <td>{{$brand->status}}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('brand.edit',['id' => $brand->id])}}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('brand.delete',['id' => $brand->id])}}" onclick="return confirm('Are you sure to delete this..?');">

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
        <!-- All User Table Ends-->

        <div class="container-fluid">
            <!-- footer start-->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">
                        <p class="mb-0">Copyright 2022 © Fastkart theme by pixelstrap</p>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    </div>
    <!-- Container-fluid end -->
@endsection

