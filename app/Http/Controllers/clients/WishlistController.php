<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $client = session()->get('client');
        $demo = 'get_wishlist';
        if ($client) {
            $wishlist = Wishlist::get_wishlists();
            return view('client.component.pages.wishlist', compact('wishlist'));
        } else {
            return view('client.content.login',compact('demo'));
        }
    }

    public function add($id)
    {
        $client = session()->get('client');
        // dd($client);
        $demo = 'add_wishlist';
        if ($client) {
            $wishlist = Wishlist::where('id_pro', $id)->get();
            // dd(count($wishlist));
             if(count($wishlist) == 0){
                wishlist::create([
                    'id_user' => $client->id,
                    'id_pro' => $id
                ]);
             }
             $products = Product::where('status',1)->get();
             $product =  Product:: add_attr_pro($products);
            $wishlist = Wishlist::get_wishlist($id);
            return view('home-client',compact('product'));

        } else {
            return view('client.content.login',compact('demo'));
        }
    }
}
