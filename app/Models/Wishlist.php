<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wishlist extends Model
{   protected $guarded = [];
    use HasFactory;
    public static function get_wishlists(){
        return DB::table('wishlists')
        ->join('users', 'wishlists.id_user', '=', 'users.id')
        ->join('products', 'wishlists.id_pro', '=', 'products.id')
        ->select('wishlists.*', 'users.id as userId', 'products.name as proName')
        ->get();
    }

    public static function get_wishlist(){
        return DB::table('wishlists')
        ->join('users', 'wishlists.id_user', '=', 'users.id')
        ->join('products', 'wishlists.id_pro', '=', 'products.id')
        ->select('wishlists.*', 'users.id as userId', 'products.name as proName')
        ->first();
    }

    // public function product_details()
    // {
    //     return $this->belongsTo(Product_detail::class, 'id_product_detail', 'id');
    // }
}
