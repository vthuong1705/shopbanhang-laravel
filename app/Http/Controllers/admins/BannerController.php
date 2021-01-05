<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBannerRequest;
use App\Models\banner;
use Illuminate\Http\Request;
use App\Traits\UploadFile;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

class BannerController extends Controller
{
    use UploadFile;
    public function index()
    {
        $banner = banner::paginate(10);
        return view('admin.banner.index', compact('banner'));
    }

    public function create()
    {
        return view('admin.banner.add');
    }

    public function store(AddBannerRequest $request)
    {
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
        $banner = banner::create($dataInsert);
        if ($banner) {
            return redirect()->route('banner.index')->with('success', 'thêm mới thành công');
        }
    }

    public function edit($id)
    {
        $banner = banner::find($id);
        return view('admin.banner.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $dataUpload = $this->uploadImage($request, 'banner', 'img_banner');
        $bann = banner::find($id);
        // dd($banner->id);
        $dataUpdate = [
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status
        ];

        if ($request->file('img_banner') == null) {
            $dataUpdate['img_banner'] = $bann->img_banner;
        } else {
            File::delete($bann->img_banner);
            $dataUpdate['img_banner'] = $dataUpload;
        }
        banner::find($id)->update($dataUpdate);
        $banner = banner::find($id);


        //insert to img_pro


        if ($request->hasFile('image')) {
            banner::delete_image($id);
        }
        return redirect()->route('banner.index')->with('success', 'sửa thành công');
    }

    public function delete($id)
    {
        try {
            banner::delete_image($id);
            $banner = banner::find($id)->delete();
            if ($banner) {
                return response()->json([
                    'code' => 200,
                    'message' => 'success'
                ], 200);
            }
        } catch (Exception $exception) {
            Log::error('message ' . $exception->getMessage() . ' line ' . $exception->getLine());
            return response()->json([
                'code' => 500,
                'message' => 'success'
            ], 500);
        }
    }
}
