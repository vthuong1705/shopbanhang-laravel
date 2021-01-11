<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(){
        $client = session()->get('client');
        $wishlist = Wishlist::get_wishlist();
        // dd($wishlist);
        return view('client.component.pages.wishlist',compact('wishlist'));
    }

    public function add($id){
        $client = session()->get('client');
        $demo = 'check';
        $product = Product::where('status', 1)->paginate(10);
        foreach ($product as $value) {
            $product_detail = isset($value->find_info_product) ? $value->find_info_product : [];
            if (isset($product_detail[0])) {
                $value->setAttribute('price', $product_detail[0]['price']);
                $value->setAttribute('discount', $product_detail[0]['discount']);
                $value->setAttribute('id_detail', $product_detail[0]['id']);
                $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
            } else {
                $value->setAttribute('price', 0);
                $value->setAttribute('discount', 0);
                $value->setAttribute('id_detail', 0);
                $value->setAttribute('sale_price', 0);
            }
        }
        if($client){
            $wishlist = Wishlist::where('id_pro',$id)->get();
            if(!$wishlist){
                wishlist::create([
                    'id_user' => $client->id,
                    'id_pro'=>$id
                ]);
            }
            $wishlist = Wishlist::get_wishlist();
            // dd($wishlist);
            return view('home-client',compact('wishlist','product'));
        }else{
            return view('client.content.login');
        }
    }
}
