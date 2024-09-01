@extends('admin.master')
@section('title','Manage Sub category')

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
                                <h5>All Category</h5>
                                <form class="d-inline-flex">
                                    <a href="add-new-category.html"
                                       class="align-items-center btn btn-theme d-flex">
                                        <i data-feather="plus-square"></i>Add New
                                    </a>
                                </form>
                            </div>

                            <div class="table-responsive category-table">
                                <p class="text-success text-center">{{session('message')}}</p>
                                <div>
                                    <table class="table all-package theme-table" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Category Name</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($sub_categories as $sub_category)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{isset($sub_category->category->name) ? $sub_category->category->name : ' '}}</td>
                                                <td>{{$sub_category->name}}</td>
                                                <td>{{$sub_category->description}}</td>

                                                <td>
                                                    <img src="{{asset($sub_category->image)}}"
                                                         alt="" height="62" width="67"/>
                                                </td>

                                                {{--                                            <td>--}}
                                                {{--                                                <div class="category-icon">--}}
                                                {{--                                                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg"--}}
                                                {{--                                                         class="img-fluid" alt="">--}}
                                                {{--                                                </div>--}}
                                                {{--                                            </td>--}}

                                                <td>{{$sub_category->status}}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('sub-category.edit',['id' =>$sub_category->id])}}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('sub-category.delete',['id' =>$sub_category->id])}}" onclick="return confirm('Are you sure to delete this....?');">

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

