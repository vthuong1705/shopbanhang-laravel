<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Models\brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Product_image;
use App\Traits\UploadFile;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use UploadFile;
    private $product_image;

    public function __construct(Product_image $product_image)
    {
        $this->product_image = $product_image;
    }

    public function index()
    {

        // dd($pro);
        $product = Product::get_info_product();
        // dd($product);
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        $cate = Category::all();
        $brand = brand::all();
        return view('admin.product.add', compact('cate', 'brand'));
    }

    public function store(AddProductRequest $request)
    {
        $dataUpload = $this->uploadImage($request, 'product', 'avatar');
        $dataInsert = [
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => (!empty($request->sale_price)) ? $request->sale_price : 0,
            'cat_id' => $request->cat_id,
            'brand_id' => $request->brand_id,
            'desc' => $request->desc,
            'slug' => Str::slug($request->name, '-')
        ];

        $dataInsert['avatar'] = $dataUpload;
        // dd($dataInsert);
        $product = Product::create($dataInsert);

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
        $product = Product::find($id);
        $img_pro = Product::get_image($id);
        // dd($img);
        return view('admin.product.edit', compact('cate', 'brand', 'product', 'img_pro'));
    }

    public function update($id, Request $request)
    {
        $dataUpload = $this->uploadImage($request, 'product', 'avatar');
        $pro = Product::find($id);
        $dataUpdate = [
            'name' => $request->name,
            'price' => $request->price,
            'sale_price' => (!empty($request->sale_price)) ? $request->sale_price : 0,
            'cat_id' => $request->cat_id,
            'brand_id' => $request->brand_id,
            'desc' => $request->desc,
            'slug' => Str::slug($request->name, '-')
        ];

        if ($request->file('avatar') == null) {
            $dataUpdate['avatar'] = $pro->avatar;
        } else {
            File::delete($pro->avatar);
            $dataUpdate['avatar'] = $dataUpload;
        }
        Product::find($id)->update($dataUpdate);
        $product = Product::find($id);

        //insert to img_pro


        if ($request->hasFile('image')) {
            Product_image::delete_image($id);
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
