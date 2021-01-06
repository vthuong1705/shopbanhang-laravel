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

    public function showCart(CartHelper $cartHelper){
        // dd($cartHelper);
        $cart = session()->get('cart');
        // dd($cart);
        return view('client.content.cart',compact('cart','cartHelper'));
    }

    public function updateQuantity(Request $request,CartHelper $cartHelper){
        // dd(session()->get('cart'));
        $product = product_detail::get_to_cart($request->id);
        $cart = $cartHelper->add($product,$request->quantity);
        return redirect()->route('client.show_cart');
    }

    public function updateCart(Request $request,CartHelper $cartHelper){
        // $data = $request->all();
        $data = $cartHelper->update_cart($request->id,$request->quantity);
        // dd($data);
        $cart = session()->get('cart');
        $reset_page = view('client.component.pages.blade-child.cart-component',compact('cart','cartHelper'))->render();
        return response()->json(['data'=>$data,'content'=>$reset_page]);
    }
}
