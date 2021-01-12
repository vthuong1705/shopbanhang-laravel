<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Product;
use App\Models\product_detail;
use App\Models\Product_image;
use App\Models\Size;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($slug,$id){
        $pro = Product::where('slug',$slug)->first();
        // dd($pro);
        $details = product_detail::get_info_product($pro->id);
        // dd($details);
        $pro_detail = product_detail::get_product_detail($pro->id);
        $product = Product::get_cate($pro->brand_id,$pro->cat_id);
        // dd($product);
        $img_pro = Product_image::get_image_detail($pro->id);
        $size = Size::all();
        $detail = product_detail::find($id);
        $product_new = Product::where('status',1)->paginate(10);
        foreach($product_new as $value){
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
        $feedback = Feedback::get_feedback($pro->id);
        // dd($feedback);
        return view('client.content.product-detail',compact('product','pro_detail','img_pro','detail','size','details','feedback'));
    }

}
