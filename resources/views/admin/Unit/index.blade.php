@extends('admin.master')
@section('title','Manage Unit')

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
                                <h5>All Unit</h5>
                                <form class="d-inline-flex">
                                    <a href="add-new-unit.html"
                                       class="align-items-center btn btn-theme d-flex">
                                        <i data-feather="plus-square"></i>Add New
                                    </a>
                                </form>
                            </div>

                            <div class="table-responsive unit-table">
                                <p class="text-success text-center">{{session('message')}}</p>
                                <div>
                                    <table class="table all-package theme-table" id="table_id">
                                        <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Unit Name</th>
                                            <th>Unit Code</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Option</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($units as $unit)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>

                                                <td>{{$unit->name}}</td>
                                                <td>{{$unit->code}}</td>
                                                <td>{{$unit->description}}</td>
                                                <td>{{$unit->status}}</td>

                                                <td>
                                                    <ul>
                                                        <li>
                                                            <a href="order-detail.html">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('unit.edit',['id' => $unit->id])}}">
                                                                <i class="ri-pencil-line"></i>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('unit.delete',['id' => $unit->id])}}" onclick="return confirm('Are you sure to delete this..?');">
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


