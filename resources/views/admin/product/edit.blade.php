@extends('admin.master')
@section('title','Edit Product Details')

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
                                        <h5> Edit Product Details</h5>
                                    </div>


                                    <div class="card-body">
                                        <p class="text-muted">{{session('message')}}</p>
                                        <form class="form-horizontal" action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-4">
                                                <label for="firstName" class="col-md-3 form-label">Category Name</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="category_id">
                                                        <option value=""> -- Select Category Name -- </option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}" @selected($product->category_id == $category->id)>{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="firstName" class="col-md-3 form-label">Sub Category Name</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="sub_category_id">
                                                        <option value=""> -- Select Sub Category Name -- </option>
                                                        @foreach($subCategories as $subCategory)
                                                            <option value="{{$subCategory->id}}"@selected($product->sub_category_id == $subCategory->id)>{{$subCategory->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="firstName" class="col-md-3 form-label">Brand Name</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="brand_id">
                                                        <option value=""> -- Select Brand Name -- </option>
                                                        @foreach($brands as $brand)
                                                            <option value="{{$brand->id}}"@selected($product->brand_id == $brand->id)>{{$brand->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="firstName" class="col-md-3 form-label">Unit Name</label>
                                                <div class="col-md-9">
                                                    <select class="form-control" name="unit_id">
                                                        <option value=""> -- Select unit Name -- </option>
                                                        @foreach($units as $unit)
                                                            <option value="{{$unit->id}}" @selected($product->unit_id == $unit->id)>{{$unit->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="" class="col-md-3 form-label">Product Name</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="" placeholder="Product Name" type="text" name="name" value="{{$product->name}}"/>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="" class="col-md-3 form-label">Product Code</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="" placeholder="Product Code" type="text" name="code" value="{{$product->code}}"/>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="lastName" class="col-md-3 form-label">Short Description</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="" placeholder="Short Description" name="short_description">{{$product->short_description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="lastName" class="col-md-3 ">Long Description</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="editor" placeholder="Long Description" name="long_description">{{$product->long_description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="lastName" class="col-md-3 form-label">Meta Title</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="" placeholder="Meta title" name="meta_title">{{$product->meta_title}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="lastName" class="col-md-3 form-label">Meta Description</label>
                                                <div class="col-md-9">
                                                    <textarea class="form-control" id="" placeholder="Meta Description" name="meta_description">{{$product->meta_description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="" class="col-md-3 form-label">Product Price</label>
                                                <div class="col-md-9">
                                                    <div class="">
                                                        <input class="form-control" id="" placeholder="Regular Price" type="number" name="regular_price" value="{{$product->regular_price}}"/>
                                                        <input class="form-control" id="" placeholder="Selling Price" type="number" name="selling_price" value="{{$product->selling_price}}"/>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="" class="col-md-3 form-label">Stock Amount</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="" placeholder="Stock Amount" type="number" name="stock_amount" value="{{$product->stock_amount}}"/>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="email" class="col-md-3 form-label">Product Image</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="" type="file" name="image" accept="image/*"/>
                                                    <img src="{{asset($product->image)}}" alt="" height="70px" width="70px">
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label for="" class="col-md-3 form-label">Product Other Image</label>
                                                <div class="col-md-9">
                                                    <input class="form-control" id="" type="file" name="other_image[]" multiple accept="image/*"/>
                                                    @foreach($product->otherImage as $otherImage)
                                                        <img src="{{asset($otherImage->image)}}" alt="" width="70px" height="70px"/>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label class="col-md-3 form-label">Publication Status</label>
                                                <div class="col-md-9">
                                                    <label><input type="radio" name="status" {{$product->status == 1 ? 'checked' : ' '}} checked value="1"> Published</label>
                                                    <label><input type="radio" name="status" {{$product->status == 0 ? 'checked' : ' '}} value="0"> Unpublished</label>
                                                </div>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Update Product Info</button>
                                        </form>
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
