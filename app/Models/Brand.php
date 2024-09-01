<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    private static $brand, $image, $directory, $imageName, $extension, $imageUrl;

    private static function getimageUrl($image)
    {
        self::$extension=$image->getClientOriginalExtension();
        self::$imageName =time().'.'.self::$extension;
        self::$directory ='upload/brand-image/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl=self::$directory.self::$imageName;
        return self::$imageUrl;
    }


    public static function newBrand($request)
    {
        self::saveBasicInfo(new Brand(), $request, self::getimageUrl($request->file('image')));
    }
    public static function updateBrand($request, $id)
    {
        self::$brand = Brand::find($id);
        if (self::$image = $request->file('image'))
        {
            if (file_exists(self::$brand->image))
            {
                unlink(self::$brand->image);
            }

            self::$imageUrl=self::getimageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$brand->image;
        }
        self::saveBasicInfo(self::$brand, $request,self::$imageUrl);
    }
    public static function deleteBrand($id)
    {
        self::$brand = Brand::find($id);
        if (file_exists(self::$brand->image))
        {
            unlink(self::$brand->image);
        }
        self::$brand->delete();
    }

    private static function saveBasicInfo($brand, $request, $imageUrl)
    {
        $brand->name =$request->name;
        $brand->description=$request->description;
        $brand->image=$imageUrl;
        $brand->status =$request->status;
        $brand->save();
    }
}
