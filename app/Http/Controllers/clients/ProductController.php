<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_cate($slug,$id){
        $product = Product::where('cat_id',$id)->paginate(10);
        foreach($product as $value){
            $product_detail = isset($value->find_info_product)?$value->find_info_product:[];
            if(isset($product_detail[0])){
                $value->setAttribute('price', $product_detail[0]['price']);
                $value->setAttribute('discount', $product_detail[0]['discount']);
                $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
            }else{
                $value->setAttribute('price', 0);
                $value->setAttribute('discount', 0);
                $value->setAttribute('sale_price', 0);
            }
        }
        return view('client.content.category',compact('product'));
    }
    public function get_brand($slug,$id){
        $product = Product::where('brand_id',$id)->paginate(10);
        foreach($product as $value){
            $product_detail = isset($value->find_info_product)?$value->find_info_product:[];
            if(isset($product_detail[0])){
                $value->setAttribute('price', $product_detail[0]['price']);
                $value->setAttribute('discount', $product_detail[0]['discount']);
                $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
            }else{
                $value->setAttribute('price', 0);
                $value->setAttribute('discount', 0);
                $value->setAttribute('sale_price', 0);
            }
        }
        return view('client.content.category',compact('product'));
    }
}
