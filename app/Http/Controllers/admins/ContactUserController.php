<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUserController extends Controller
{
    public function index(){
        return view('admin.contact-user.index');
    }
}
