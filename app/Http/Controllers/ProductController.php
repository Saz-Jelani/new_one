<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\ProductImage;

class ProductController extends Controller
{
    private $product;

    public function index()
    {
        return view('admin.product.index', [
            'products' => Product::all(),
        ]);
    }

    public function create()
    {
        return view('admin.product.create', [
            'categories' => Category::all(),
            'units' => Unit::all(),
            'brands' => Brand::all(),
            'subCategories' => SubCategory::all()
        ]);
    }
    private $subCategory;
    public function getSubCategoryByCategory()
    {
        $this->subCategory = SubCategory::where('category_id', $_GET['category_id'])->get();
        return response()->json($this->subCategory);
    }

    public function store(Request $request)
    {
        $this->product = Product::newProduct($request);
        ProductImage::newProductImage($request->file('other_image'), $this->product->id);
        return back()->with('message', 'Product info save successfully.');
    }

    public function detail($id)
    {
        return view('admin.product.detail', [
            'product' => Product::find($id)

        ]);
    }

    public function edit($id)
    {
        return view('admin.product.edit', [
            'product' => Product::find($id),
            'categories' => Category::all(),
            'units' => Unit::all(),
            'brands' => Brand::all(),
            'subCategories' => SubCategory::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        if ($images = $request->file('other_image'))
        {
            ProductImage::updateProductImage($images, $id);
        }
        return redirect('/Product/index')->with('message', 'Product info Update successfully');
    }

    public function delete($id)
    {
        Product::deleteProduct($id);
        ProductImage::deleteProductImage($id);
        return redirect('/Product/index') ->with('message', 'Product info delete successfully');
    }

}
