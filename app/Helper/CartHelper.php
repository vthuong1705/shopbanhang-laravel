<?php

namespace App\Helper;

class CartHelper{

    public function __construct()
    {
        $this->items = session('cart')?session('cart'):[];
    }

    public function add($product,$quantity = 1){
        // dd($product);
        // session()->forget('cart');
        $item = [
            'id'=>$product->id,
            'name'=>$product->name,
            'sku'=>$product->sku,
            'price'=>$product->sale_price,
            'image'=>$product->avatar,
            'size'=>$product->nameSize,
            'quantity'=>$quantity
        ];
        if(isset($this->items[$product->id])){
            $this->items[$product->id]['quantity'] += $quantity;
        }else{
            $this->items[$product->id] = $item;
        }

        session()->put('cart',$this->items);
    }
}
