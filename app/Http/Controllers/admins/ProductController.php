<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\product_detail;
use App\Models\Product_image;
use App\Models\Size;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use UploadFile;
    private $product_image;
    private $product_detail;
    private $product;

    public function __construct(Product_image $product_image,product_detail $product_detail,Product $product)
    {
        $this->product_image = $product_image;
        $this->product_detail = $product_detail;
        $this->product = $product;
    }

    public function index()
    {
        $product = Product::get_info_product();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        $cate = Category::all();
        $brand = brand::all();
        $size = Size::all();
        return view('admin.product.add', compact('cate', 'brand','size'));
    }

    public function store(Request $request)
    {
        // dd($this->product_detail->insert_size($request->size));
        $dataUpload = $this->uploadImage($request, 'product', 'avatar');
        $dataInsert = [
            'name' => $request->name,
            'cat_id' => $request->cat_id,
            'brand_id' => $request->brand_id,
            'desc' => $request->desc,
            'slug' => Str::slug($request->name, '-')
        ];

        // 'price' => $request->price,
        //     'sale_price' => (!empty($request->sale_price)) ? $request->sale_price : 0,

        $dataInsert['avatar'] = $dataUpload;
        // dd($dataInsert);
        $product = Product::create($dataInsert);

        //insert to pro_detail

        $this->product_detail->insert_size($request->size,$request,$product->id);

        //insert to img_pro

        if ($request->hasFile('image')) {
            foreach ($request->image as $value) {
                $UploadMuiple = $this->uploadImageMutiple($value, 'product');
                Product_image::create([
                    'image' => $UploadMuiple,
                    'id_pro' => $product->id
                ]);
            }
        }
        return redirect()->route('product.index')->with('success', 'thêm mới thành công');
    }

    public function edit($id)
    {
        $cate = Category::all();
        $brand = brand::all();
        $product_detail = product_detail::find($id);
        // dd($product_detail);
        $product = Product::find($product_detail->id_pro);
        // dd($product);
        $img_pro = Product::get_image($product_detail->id_pro);
        // dd($get_image);
        return view('admin.product.edit', compact('cate', 'brand', 'product', 'img_pro','product_detail'));
    }

    public function update($id, Request $request)
    {
        $dataUpload = $this->uploadImage($request, 'product', 'avatar');
        $pro_detail = product_detail::find($id);
        $pro = Product::find($pro_detail->id_pro);
        // dd($pro->id);
        $dataUpdate = [
            'name' => $request->name,
            'cat_id' => $request->cat_id,
            'brand_id' => $request->brand_id,
            'desc' => $request->desc,
            'slug' => Str::slug($request->name, '-'),
            'status'=>$request->status
        ];

        if ($request->file('avatar') == null) {
            $dataUpdate['avatar'] = $pro->avatar;
        } else {
            File::delete($pro->avatar);
            $dataUpdate['avatar'] = $dataUpload;
        }
        Product::find($pro_detail->id_pro)->update($dataUpdate);
        $product = Product::find($pro_detail->id_pro);

        //update into pro_detail

        product_detail::find($id)->update([
            'id_pro'=>$pro_detail->id_pro,
            'price'=>$request->price,
            'discount'=>(!empty($request->discount)) ? $request->discount : 0,
            'sale_price'=> $request->price + ($request->price * $request->discount),
            'quantity'=>$request->quantity,
            'id_size'=>$pro_detail->id_size
        ]);

        //insert to img_pro


        if ($request->hasFile('image')) {
            Product_image::delete_image($pro_detail->id_pro);
            foreach ($request->image as $value) {
                $UploadMuiple = $this->uploadImageMutiple($value, 'product');
                $pro = Product_image::create([
                    'image' => $UploadMuiple,
                    'id_pro' => $product->id
                ]);
            }
        }
        return redirect()->route('product.index')->with('success', 'sửa thành công');
    }

    public function delete($id)
    {
        Product_image::delete_image($id);
        $product = Product::find($id)->delete();
        if ($product) {
            return response()->json([
                'code' => 200,
                'message' => 'success'
            ], 200);
        }
    }
}
