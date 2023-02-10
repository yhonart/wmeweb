<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // Home admin
    public function adminlogin(){
        return view('admin_page/AdminLogin');        
    }

    public function adminpage(){
        return view('admin_page/AdminPage');
    }
    
    public function services(){
        return view('admin_page/ServicesPage');
    }

    public function news(){
        return view('admin_page/NewsPage');
    }

    public function newstable(){
        $tbwmeproject = DB::table('wme_project')
            ->get();
        return view('admin_page/NewsTable', compact('tbwmeproject'));
    }

    public function menu(){
        return view('admin_page/MenuPage');
    }

    public function newsform(){
        return view('admin_page/NewsForm');
    }
    public function newsedit($IdProject){

        $editproject = DB::table('wme_project')
            ->where('project_id',$IdProject)
            ->first();
        $projectgallery = DB::table('wme_project_gallery')
            ->where('gallery_id',$IdProject)
            ->get();

        return view('admin_page/NewsFormEdit', compact('editproject','projectgallery','IdProject'));
    }
    public function postingNewsEdit(Request $reqPostingEdit)
    {
        $update = DB::table('wme_project')
            ->where('project_id',$reqPostingEdit->idproject)
            ->update([
                'project_name'=>$reqPostingEdit->edittitle,
                'project_desc'=>$reqPostingEdit->editdesc,
            ]);
    }
}
