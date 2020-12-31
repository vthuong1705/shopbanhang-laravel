<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $admin = session()->get('admin');
        // dd($admin);
        return view('admin.profile.index',compact('admin'));
    }

    public function edit($id){
        $admin = admin::find($id);
        dd($admin);
    }
}
