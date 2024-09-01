<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\select;

class  Category extends Model
{
    use HasFactory;

    private static $category, $iconimg, $directory, $iconimgName, $extension, $iconimgUrl;

    public static function newCategory($request)
    {
        self::saveBasicInfo(new Category(), $request, getFileUrl($request->file('iconimg'), 'upload/category-image/'));
    }
    /**
     * @param $request
     * @param $id
     * @return void
     */
    public static function updateCategory($request, $id)
    {
        self::$category = Category::find($id);
        if (self::$iconimg = $request->file('iconimg'))
        {
            deleteFile(self::$category->iconimg);
            self::$iconimgUrl = getFileUrl(self::$iconimg, 'upload/category-image/');
        }
        else
        {
            self::$iconimgUrl = self::$category->iconimg;
        }
       self::saveBasicInfo(self::$category, $request,self::$iconimgUrl);
    }
    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        deleteFile(self::$category->iconimg);
        self::$category->delete();
    }

    private static function saveBasicInfo($category, $request, $iconimgUrl)
    {
        $category->name =$request->name;
        $category->description=$request->description;
        $category->iconimg=$iconimgUrl;
        $category->status =$request->status;
        $category->save();
    }
    public function subCategory()
    {
        return $this->hasMany(SubCategory::class);
    }


}
