@extends('admin.master')
@section('title','Add Products')

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

                                    <p class="text-muted">{{session('message')}}</p>
                                    <form class="form-horizontal" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label  for="" class="form-label-title col-sm-3 mb-0">Category Name</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="category_id" onchange="getSubCategory(this.value)">
                                                        <option value=""> -- Select Category Name -- </option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        {{--                                    <div class="mb-4 row align-items-center">--}}
                                        {{--                                        <label for="firstName" class="col-md-3 form-label"> Category Name</label>--}}
                                        {{--                                    <form class="form-horizontal" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">--}}
                                        {{--                                        <div class="col-md-9">--}}
                                        {{--                                            <select class="form-control" name="category_id" onchange="getSubCategory(this.value)">--}}
                                        {{--                                                <option value=""> -- Select Category Name -- </option>--}}
                                        {{--                                                @foreach($categories as $category)--}}
                                        {{--                                                    <option value="{{$category->id}}">{{$category->name}}</option>--}}
                                        {{--                                                @endforeach--}}
                                        {{--                                            </select>--}}
                                        {{--                                        </div>--}}
                                        {{--                                    </div>--}}

                                        <div class="theme-form theme-form-2 mega-form">
                                            <div class="mb-4 row align-items-center">
                                                <label   for="" class="form-label-title col-sm-3 mb-0">Sub Category Name</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="sub_category_id" id="subCategoryId">
                                                        <option value=""> -- Select Sub Category Name -- </option>
                                                        @foreach($subCategories as $subCategory)
                                                            <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>


                                            <div class="mb-4 row align-items-center">
                                                <label for="" class="form-label-title col-sm-3 mb-0">Brand Name</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="brand_id">
                                                        <option value=""> -- Select Brand Name -- </option>
                                                        @foreach($brands as $brand)
                                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label for="" class="form-label-title col-sm-3 mb-0">Unit Name</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="unit_id">
                                                        <option value=""> -- Select unit Name -- </option>
                                                        @foreach($units as $unit)
                                                            <option value="{{$unit->id}}">{{$unit->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label for="" class="form-label-title col-sm-3 mb-0">Product Name</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="" placeholder="Product Name" type="text" name="name"/>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label for="" class="form-label-title col-sm-3 mb-0">Product Code</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="" placeholder="Product Code" type="text" name="code"/>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label for="lastName" class="form-label-title col-sm-3 mb-0">Short Description</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="" placeholder="Short Description" name="short_description"></textarea>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label for="lastName" class="form-label-title col-sm-3 mb-0">Long Description</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="editor" placeholder="Long Description" name="long_description"></textarea>
                                                </div>
                                            </div>



                                            <div class="mb-4 row align-items-center">
                                                <label for="lastName" class="form-label-title col-sm-3 mb-0">Meta Title</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="" placeholder="Meta title" name="meta_title"></textarea>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label for="lastName" class="form-label-title col-sm-3 mb-0">Meta Description</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="" placeholder="Meta Description" name="meta_description"></textarea>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label for="" class="form-label-title col-sm-3 mb-0">Product Price</label>
                                                <div class="col-md-9">
                                                    <div class="">
                                                        <input class="form-label-title " id="" placeholder="Regular Price" type="number" name="regular_price"/>
                                                        <input class="form-label-title " id="" placeholder="Selling Price" type="number" name="selling_price"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label for="" class="form-label-title col-sm-3 mb-0">Stock Amount</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="" placeholder="Stock Amount" type="number" name="stock_amount"/>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label for="email" class="form-label-title col-sm-3 mb-0">Product Image</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="" type="file" name="image" accept="image/*"/>
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label for="" class="form-label-title col-sm-3 mb-0">Product Other Image</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="" type="file" name="other_image[]" multiple accept="image/*"/>
                                                </div>
                                            </div>
                                            <div class="mb-4 row align-items-center">
                                                <label for="" class="form-label-title col-sm-3 mb-0">Publication Status</label>
                                                <div class="col-md-9">
                                                    <label><input type="radio" name="status" checked value="1"> Published</label>
                                                    <label><input type="radio" name="status" value="0"> Unpublished</label>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Create New Product</button>
                                    </form>
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
