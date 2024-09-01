<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $subcategory, $image, $directory, $imageName, $extension, $imageUrl;

    private static function getimageUrl($image)
    {
        self::$extension=$image->getClientOriginalExtension();
        self::$imageName =time().'.'.self::$extension;
        self::$directory ='upload/sub-category-image/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl=self::$directory.self::$imageName;
        return self::$imageUrl;
    }


    public static function newSubCategory($request)
    {
        self::saveBasicInfo(new SubCategory(), $request, self::getimageUrl($request->file('image')));
    }
    public static function updateSubCategory($request, $id)
    {
        self::$subcategory = SubCategory::find($id);
        if (self::$image = $request->file('image'))
        {
            if (file_exists(self::$subcategory->image))
            {
                unlink(self::$subcategory->image);
            }

            self::$imageUrl=self::getimageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$subcategory->image;
        }
        self::saveBasicInfo(self::$subcategory, $request,self::$imageUrl);
    }
    public static function deleteSubCategory($id)
    {
        self::$subcategory = SubCategory::find($id);
        if (file_exists(self::$subcategory->image))
        {
            unlink(self::$subcategory->image);
        }
        self::$subcategory->delete();
    }

    private static function saveBasicInfo($subcategory, $request, $imageUrl)
    {
           $subcategory->category_id  =$request->category_id;
            $subcategory->name         =$request->name;
            $subcategory->description  =$request->description;
            $subcategory->image        =$imageUrl;
            $subcategory->status       =$request->status;
        $subcategory->save();
    }
    public function category()
    {
        return$this->belongsTo(Category::class);
    }

}
