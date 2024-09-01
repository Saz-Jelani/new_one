@extends('admin.master')
@section('title','Crete User')

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
                                        <h5> Add User Information</h5>
                                    </div>


                                    <div class="card-body">
                                        <p class="text-muted">{{session('message')}}</p>
                                        <form class="form-horizontal" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf


                                    <div class="theme-form theme-form-2 mega-form">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">User Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="firstname" type="text"
                                                       placeholder="Category Name" name="name"/>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">User Email</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="firstname" type="email"
                                                       placeholder="User Email" name="email"/>
                                            </div>
                                        </div>
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">User Password</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" id="firstname" type="password"
                                                       placeholder="User pass " name="password"/>
                                            </div>
                                        </div>






                                        {{--                                            <div class="row">--}}
{{--                                                <label class="col-md-3 form-label">Publication Status</label>--}}
{{--                                                <div class="col-md-9">--}}
{{--                                                    <label><input type="radio" name="status" value="1"> Published</label>--}}
{{--                                                    <label><input type="radio" name="status" value="0"> Unpublished</label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}

{{--                                            <div class="mb-4 row align-items-center">--}}
{{--                                                <label--}}
{{--                                                    class="col-sm-3 col-form-label form-label-title">Published</label>--}}
{{--                                                <div class="col-sm-9">--}}
{{--                                                    <label class="switch">--}}
{{--                                                        <input type="hidden" name="status"  value="0"> <span class="switch-state"></span>--}}
{{--                                                        <input type="checkbox" name="status"  value="1"> <span class="switch-state"></span>--}}

{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            <button class="btn btn-primary" type="submit">Create New User</button>
                                    </div>
                                </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Add End -->

        <!-- footer Start -->
        <div class="container-fluid">
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12 footer-copyright text-center">

                    </div>
                </div>
            </footer>
        </div>
        <!-- footer En -->
    </div>
    <!-- Container-fluid End -->
    </div>


@endsection

