<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(Product $product)
    {
        $client = session()->get('client');
        $demo = 'get_wishlist';
        if ($client) {
            $wishlist = Wishlist::get_wishlists();
            // dd($wishlist);
            foreach ($wishlist as $item) {
                // dd($item);

                $product = Product::where('id',$item->id_pro)->get();
                foreach ($product as $value) {
                    $product_detail = isset($value->find_info_product) ? $value->find_info_product : [];
                    if (isset($product_detail[0])) {
                        $value->setAttribute('price', $product_detail[0]['price']);
                        $value->setAttribute('discount', $product_detail[0]['discount']);
                        $value->setAttribute('id_detail', $product_detail[0]['id']);
                        $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
                        $value->setAttribute('quantity', $product_detail[0]['quantity']);
                    } else {
                        $value->setAttribute('price', 0);
                        $value->setAttribute('discount', 0);
                        $value->setAttribute('id_detail', 0);
                        $value->setAttribute('sale_price', 0);
                    }
            };
                // dd($product->price);

            }

            return view('client.component.pages.wishlist', compact('wishlist', 'product'));

        } else {
            return view('client.content.login', compact('demo'));
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
            wishlist::create([
                'id_user' => $client->id,
                'id_pro' => $id
            ]);
            if (count($wishlist)) {
            }
            $products = Product::where('status', 1)->get();
            $product =  Product::add_attr_pro($products);
            $wishlist = Wishlist::get_wishlist($id);
            return back();
        } else {
            return view('client.content.login', compact('demo'));
        }
    }

    public function remove($id)
	{
		$wishlist=Wishlist::find($id)->delete();
		// dd($wishlist);
		return redirect()->back()->with('success','Xóa sản phẩm thành công');
	}
}
