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
            ->select('products.*', 'brands.name as brandName', 'categories.name as cateName')
            ->get();
    }

    public static function get_cate($brand_id,$cate_id)
    {
        return DB::table('products')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->join('categories', 'products.cat_id', '=', 'categories.id')
            ->select('products.*', 'brands.name as brandName', 'brands.id as brandId', 'brands.slug as brandSlug',
            'categories.id as cateId' , 'categories.name as cateName', 'categories.slug as cateSlug')
            ->where('products.brand_id',$brand_id)
            ->where('products.cat_id',$cate_id)
            ->first();
    }

    public static function delete_pro_detail($id){
        return DB::table('product_details')->where('id_pro',$id)->delete();
    }

    public static function get_image($id){
        return DB::table('product_images')->where('id_pro',$id)->get();
    }

    public function find_info_product(){
        return $this->hasMany(product_detail::class,'id_pro','id');
    }

}
