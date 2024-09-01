@extends('admin.master')
@section('title','edit SUB category')

@section('body')
    <!-- index body start -->


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
                                        <h5> Edit  Sub Category Information</h5>
                                    </div>


                                    <div class="card-body">
                                        <p class="text-muted">{{session('message')}}</p>
                                        <form class="form-horizontal" action="{{route('sub-category.update',['id' => $sub_category->id])}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="theme-form theme-form-2 mega-form">
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="category_id">
                                                            <option value=""> -- Select Category Name -- </option>
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->id}}" @selected($category->id == $sub_category->category_id)>{{$category->name}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="theme-form theme-form-2 mega-form">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-3 mb-0"> Sub Category Name</label>
                                                        <div class="col-sm-9">
                                                            <input class="form-control" id="" type="text" value="{{$sub_category->name}}"
                                                                   placeholder=" Sub Category Name" name="name"/>
                                                        </div>
                                                    </div>

                                                    <div class="theme-form theme-form-2 mega-form">
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="form-label-title col-sm-3 mb-0"> Sub Category Description</label>
                                                            <div class="col-sm-9">
                                                    <textarea class="form-control" id="firstname"
                                                              placeholder="Category Description" name="description">{{$sub_category->description}}</textarea>
                                                            </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title"> Sub Category
                                                                Image</label>
                                                            <div class="form-group col-sm-9">
                                                                <form class="theme-form theme-form-3 mega-form">
                                                                    <div class="mb-9 row align-items-center">
                                                                        <label>
                                                                        </label>
                                                                        <div class="col-sm-9">
                                                                            <input class="form-control " type="file"
                                                                                   id="formFile" name="image"/>
                                                                            <img src="{{asset($sub_category->image)}}"
                                                                                 alt="" height="62" width="67"/>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>

                                                        {{--                                            <div class="row">--}}
                                                        {{--                                                <label class="col-md-3 form-label">Publication Status</label>--}}
                                                        {{--                                                <div class="col-md-9">--}}
                                                        {{--                                                    <label><input type="radio" name="status" value="1"> Published</label>--}}
                                                        {{--                                                    <label><input type="radio" name="status" value="0"> Unpublished</label>--}}
                                                        {{--                                                </div>--}}
                                                        {{--                                            </div>--}}

                                                        <div class="mb-4 row align-items-center">
                                                            <label
                                                                class="col-sm-3 col-form-label form-label-title">Published</label>
                                                            <div class="col-sm-9">
                                                                <label class="switch">
                                                                    <input type="hidden" name="status" {{$sub_category->status == 0 ? 'checked' : ''}} value="0"> <span class="switch-state"></span>
                                                                    <input type="checkbox" name="status" {{$sub_category->status == 1 ? 'checked' : ''}} value="1"> <span class="switch-state"></span>


                                                                </label>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">Create New Sub Category</button>
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


