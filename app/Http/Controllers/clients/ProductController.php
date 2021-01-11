<?php

namespace App\Http\Controllers\clients;

use App\Helper\CartHelper;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\product_detail;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function get_cate($slug,$id){
        $product = Product::where('cat_id',$id)->where('status',1)->paginate(10);
        foreach($product as $value){
            $product_detail = isset($value->find_info_product)?$value->find_info_product:[];
            if(isset($product_detail[0])){
                $value->setAttribute('price', $product_detail[0]['price']);
                $value->setAttribute('discount', $product_detail[0]['discount']);
                $value->setAttribute('id_detail', $product_detail[0]['id']);
                $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
            }else{
                $value->setAttribute('price', 0);
                $value->setAttribute('discount', 0);
                $value->setAttribute('id_detail', 0);
                $value->setAttribute('sale_price', 0);
            }
        }
        return view('client.content.category',compact('product'));
    }
    public function get_brand($slug,$id){
        $product = Product::where('brand_id',$id)->where('status',1)->paginate(10);
        foreach($product as $value){
            $product_detail = isset($value->find_info_product)?$value->find_info_product:[];
            if(isset($product_detail[0])){
                $value->setAttribute('price', $product_detail[0]['price']);
                $value->setAttribute('discount', $product_detail[0]['discount']);
                $value->setAttribute('id_detail', $product_detail[0]['id']);
                $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
            }else{
                $value->setAttribute('price', 0);
                $value->setAttribute('discount', 0);
                $value->setAttribute('id_detail', 0);
                $value->setAttribute('sale_price', 0);
            }
        }
        return view('client.content.category',compact('product'));
    }

    public function sort_date(){
        $product = Product::where('status',1)->orderBy('created_at','desc')->paginate(10);
        foreach($product as $value){
            $product_detail = isset($value->find_info_product)?$value->find_info_product:[];
            if(isset($product_detail[0])){
                $value->setAttribute('price', $product_detail[0]['price']);
                $value->setAttribute('discount', $product_detail[0]['discount']);
                $value->setAttribute('id_detail', $product_detail[0]['id']);
                $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
            }else{
                $value->setAttribute('price', 0);
                $value->setAttribute('discount', 0);
                $value->setAttribute('id_detail', 0);
                $value->setAttribute('sale_price', 0);
            }
        }
        return view('client.content.category',compact('product'));
    }

    public function sort_low_to_high(){
        $product = Product::where('status',1)->get();
        foreach($product as $value){
            $product_detail = isset($value->find_info_product)?$value->find_info_product:[];
            if(isset($product_detail[0])){
                $value->setAttribute('price', $product_detail[0]['price']);
                $value->setAttribute('discount', $product_detail[0]['discount']);
                $value->setAttribute('id_detail', $product_detail[0]['id']);
                $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
            }else{
                $value->setAttribute('price', 0);
                $value->setAttribute('discount', 0);
                $value->setAttribute('id_detail', 0);
                $value->setAttribute('sale_price', 0);
            }
        }
        $product = $product->sortBy(function($product){
            return $product->price;
        });
        return view('client.content.category',compact('product'));
    }

    public function sort_high(){
        $product = Product::where('status',1)->get();
        foreach($product as $value){
            $product_detail = isset($value->find_info_product)?$value->find_info_product:[];
            if(isset($product_detail[0])){
                $value->setAttribute('price', $product_detail[0]['price']);
                $value->setAttribute('discount', $product_detail[0]['discount']);
                $value->setAttribute('id_detail', $product_detail[0]['id']);
                $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
            }else{
                $value->setAttribute('price', 0);
                $value->setAttribute('discount', 0);
                $value->setAttribute('id_detail', 0);
                $value->setAttribute('sale_price', 0);
            }
        }
        $product = $product->sortByDesc(function($product){
            return $product->price;
        });
        return view('client.content.category',compact('product'));
    }
}
