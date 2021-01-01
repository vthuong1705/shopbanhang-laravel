<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function get_info_product()
    {
        return DB::table('products')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->join('product_details', 'products.id', '=', 'product_details.id_pro')
            ->select('products.*', 'brands.name as brandName', 'categories.name as cateName','product_details.*')
            ->get();
    }

    public static function get_image($id){
        return DB::table('product_images')->where('id_pro',$id)->get();
    }

    // public static function get_img(){
    //     $pro = $this->belongsTo(Product_image::class, 'id_pro','id');
    //     return ;
    // }
}
