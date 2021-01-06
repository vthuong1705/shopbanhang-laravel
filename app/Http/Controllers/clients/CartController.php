<?php

namespace App\Http\Controllers\clients;

use App\Helper\CartHelper;
use App\Http\Controllers\Controller;
use App\Models\product_detail;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart($id,CartHelper $cart){
        $product_detail = product_detail::get_to_cart($id);
        // dd($product_detail);
        $cart->add($product_detail);
        return redirect()->route('client.show_cart');
    }

    public function showCart(){
        $cart = session()->get('cart');
        // dd($cart);
        return view('client.content.cart',compact('cart'));
    }
}
