<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBannerRequest;
use App\Models\banner;
use Illuminate\Http\Request;
use App\Traits\UploadFile;

class BannerController extends Controller
{
    use UploadFile;
    public function index(){
        $banner = banner::paginate(10);
        return view('admin.banner.index',compact('banner'));
    }

    public function create(){
        return view('admin.banner.add');
    }

    public function store(AddBannerRequest $request){
        // dd('123');
        $dataUpload = $this->uploadImage($request, 'banner', 'img_banner');
        $dataInsert = [
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
        ];
        $dataInsert['img_banner'] = $dataUpload;
        // dd($dataInsert);
        $banner = Banner::create($dataInsert);
        if($banner){
            return redirect()->route('banner.index')->with('success','thêm mới thành công');
        }
    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){

    }
}