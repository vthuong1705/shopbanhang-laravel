<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::paginate(10);
        return view('admin.blog.index',compact('blog'));
    }

    public function create(){
        return view('admin.blog.add');
    }

    public function store(Request $request){
        $blog = Blog::create([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'id_admin' => $request->id_admin
        ]);
        // dd($blog);
        if($blog){
            return redirect()->route('blog.index')->with('success','thêm mới thành công');
        }
    }

    public function edit($id){
        $blog = Blog::find($id);
        return view('admin.blog.edit',compact('blog'));
    }

    public function update($id, Request $request){
        $blog = Blog::find($id)->update([
            'name' => $request->name,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'id_admin' => $request->id_admin
        ]);
        if($blog){
            return redirect()->route('blog.index')->with('success','sửa thành công');
        }
    }

    public function delete($id){
        $blog = Blog::find($id)->delete();
        return response()->json([
            'code'=>200,
            'message'=>'success'
        ]);
    }
}
