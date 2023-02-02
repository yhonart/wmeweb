<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Home admin
    public function adminlogin(){
        return view('admin_page/AdminLogin');        
    }

    public function adminpage(){
        return view('admin_page/AdminPage');
    }
}
