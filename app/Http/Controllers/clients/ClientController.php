<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\product_detail;
use App\Models\Size;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $product;
    private $product_detail;
    public function __construct(Product $product,product_detail $product_detail)
    {
        $this->product = $product;
        $this->product_detail = $product_detail;
    }

    public function index(){
        $product = Product::where('status',1)->get();
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
        // dd($product_detail);
        $size = Size::all();
        $category = Category::all();
        $brand = brand::all();
        return view('home-client',compact('category','brand','size','product'));
    }
}
