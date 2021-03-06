<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\banner;
use App\Models\brand;
use App\Models\Category;

use App\Models\Contact;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use App\Models\product_detail;
use App\Models\Size;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Contracts\Pipeline\Hub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    private $product;
    private $product_detail;
    public function __construct(Product $product, product_detail $product_detail)
    {
        $this->product = $product;
        $this->product_detail = $product_detail;
    }

    public function index()
    {

        $product = Product::where('status', 1)->paginate(10);
        // $wishlist = [];
        foreach ($product as $value) {
            $product_detail = isset($value->find_info_product) ? $value->find_info_product : [];
            if (isset($product_detail[0])) {
                $value->setAttribute('price', $product_detail[0]['price']);
                $value->setAttribute('discount', $product_detail[0]['discount']);
                $value->setAttribute('id_detail', $product_detail[0]['id']);
                $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
                $value->setAttribute('sale_price', $product_detail[0]['sale_price']);
            } else {
                $value->setAttribute('price', 0);
                $value->setAttribute('discount', 0);
                $value->setAttribute('id_detail', 0);
                $value->setAttribute('sale_price', 0);
            }
        };
        // dd($contact);
        $wishlist = Wishlist::all();

        // return view('home-client', compact('product','wishlist','contact'));
        $banner = banner::where('name','banner')->first();
        return view('home-client', compact('product','wishlist','banner'));
    }

    public function login()
    {
        // dd(Hash::make('123'));
        if (session()->has('client')) {
            return view('home-client');
        } else {
            return view('client.content.login');
        }
    }

    public function register()
    {
        return view('client.content.register');
    }

    public function dang_ky(Request $request)
    {
        $email = User::check_email($request->email);
        if ($email) {
            return redirect()->back()->with('err_email', 'email đã tồn tại');
        } else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'phone' => $request->phone,
                'gender' => $request->gender
            ];
            if ($request->password === $request->rpass) {
                $data['password'] = Hash::make($request->password);
            } else {
                return redirect()->back()->with('err_password', 'mật khẩu nhập lại không trùng khớp');
            }
            User::create($data);
            return redirect()->route('client.login');
        }
    }

    public function signin(Request $request)
    {
        $email = User::check_email($request->email);
        if ($email) {
            if (Hash::check($request->password, $email->password)) {
                session()->put('client', $email);
                // dd(session()->get('client'));
                if($request->flag == 'check'){
                    return redirect()->route('client.checkout');
                }else if($request->flag == 'get_wishlist'){
                    return redirect()->route('client.wishlist');
                }
                else{
                    return redirect()->route('client.index');
                }
            }else{
                return redirect()->back()->with('err_password', 'mật khẩu không chính xác');
            }
        } else {
            return redirect()->back()->with('err_email', 'email không tồn tại');
        }
    }

    public function infoClient()
    {
        $client = session()->get('client');
        $order = Order::all();
        // dd($order);
        return view('client.content.account', compact('client','order'));
    }

    public function order_detail($id){
        $order = Order_detail::get_order_detail($id);
        // dd($order);
        return view('client.content.order-details',compact('order'));
    }

    public function change_info(Request $request,$id)
    {
        // dd($id);
        $client = session()->get('client');
        $user = User::find($id);
        // dd($request->all());
        User::find($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
            'gender'=>$request->gender
        ]);
        $user = User::find($id);
        session()->put('client',$user);
        return redirect()->route('client.index')->with('success','thay đổi thông tin thành công');
        // dd($client);
    }

   public function change_Password(Request $request){
       $client = session()->get('client');
       $user = User::check_email($client->email);
        if(Hash::check($request->password, $user->password)){
            if($request->newPass == $request->confirm){
                User::find($client->id)->update(['password'=>Hash::make($request->newPass)]);
                $user = User::check_email($client->email);
                session()->put('client',$user);
                return response()->json([
                    'code'=>200,
                    'message'=>'success',
                    'status'=>150
                ],200);
            }else{
                return response()->json([
                    'code'=>200,
                    'message'=>'confirm pass invalid',
                    'status' => 200
                ],200);
            }
        }else{
            return response()->json([
                'code'=>200,
                'message'=>'password invalid',
                'status' => 100
            ],200);
        }
   }

   public function logout(){
    session()->pull('client');
    return redirect()->back();
   }

//    public function get_search(Request $request){
//         $listProducts = Product::where('name', 'like', '%'.$request->keyword . '%')->where('status',1)->get();
//         return view('home-client',[
//             'listProduct' => $listProducts
//         ]);
//    }
}
