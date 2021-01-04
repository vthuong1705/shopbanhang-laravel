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

    public static function get_image($id){
        return DB::table('product_images')->where('id_pro',$id)->get();
    }

    public function find_info_product(){
        return $this->belongsTo(product_detail::class,'id_pro','id');
    }

<<<<<<< HEAD
    public static function get_pro(){
        $getpro = DB::table('products')->where('status',1)->paginate(1);
        // dd($getpro);
        return $getpro;

    }
    // public static function get_img(){
    //     $pro = $this->belongsTo(Product_image::class, 'id_pro','id');
    //     return ;
    // }
=======
    public static function product_details($id)
	{
        return DB::table('product_details')->where('id_pro', $id)->orderBy('created_at', 'desc')->get();
    }
    public static function get_pro_detail(){
        return DB::table('products')->where('status',1)->orderBy('created_at','desc')->get();
    }
>>>>>>> f700035b816e599fff1aa2328ecdf665ea656932
}
