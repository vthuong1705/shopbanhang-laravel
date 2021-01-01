<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class product_detail extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function insert_size($data_insert,$request,$id){
        $insert = [];
        foreach($data_insert as $value){
            product_detail::create([
                'id_pro' => $id,
                'price' => $request->price,
                'discount' => (!empty($request->discount)) ? $request->discount : 0,
                'sale_price' => $request->price + ($request->price * $request->discount),
                'quantity' => $request->quantity,
                'status'=>$request->status,
                'id_size'=>$value
            ]);
        }
        // dd($insert);
        // DB::table('product_details')->insert($insert);
    }

}
