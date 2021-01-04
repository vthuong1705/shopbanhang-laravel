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
    public function index(){
        $size = Size::all();
        $category = Category::all();
        $brand = brand::all();
<<<<<<< HEAD
        $pro = Product::get_pro();
        // dd($pro);
        return view('home-client',compact('category','brand','size','pro'));
=======
        $product = Product::paginate(10);
        return view('home-client',compact('category','brand','size','product'));
>>>>>>> f700035b816e599fff1aa2328ecdf665ea656932
    }
}
