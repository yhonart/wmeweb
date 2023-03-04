<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facedes\File;
use Illuminate\Support\Facedes\Storage;

class AdminController extends Controller
{
    // Home admin
    public function adminlogin(){
        return view('admin_page/AdminLogin');        
    }

    public function adminpage(){
        return view('admin_page/AdminPage');
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
        $wmeclient = DB::table('wme_client')
            ->get();
            
        $wmeproduct = DB::table('wme_product')
            ->where('lang','id')
            ->get();

        return view('admin_page/NewsForm',compact('wmeclient','wmeproduct'));
    }
    public function newsedit($IdProject){

        $editproject = DB::table('wme_project')
            ->where('project_id',$IdProject)
            ->first();
        $projectgallery = DB::table('wme_project_gallery')
            ->where('from_project_id',$IdProject)
            ->get();
        $produkcat = DB::table('wme_product')
            ->where('lang','id')
            ->get();

        return view('admin_page/NewsFormEdit', compact('editproject','projectgallery','IdProject','produkcat'));
    }
    public function postingEditNews(Request $reqPostingEdit)
    {
        $update = DB::table('wme_project')
            ->where('project_id',$reqPostingEdit->idproject)
            ->update([
                'project_name'=>$reqPostingEdit->edittitle,
                'project_desc'=>$reqPostingEdit->editdesc,
                'product_category'=>$reqPostingEdit->prodcat,
            ]);
    }
    public function postingAddNews(Request $reqPostingAdd)
    {
        $filecover = $reqPostingAdd->fileCover;
        $projectid = DB::select("SHOW TABLE STATUS LIKE 'wme_project'");
        $nextid = $projectid[0]->Auto_increment;

        if ($filecover<>"") {
            $typeFile = $filecover->getClientOriginalExtension();
            $nameFile = $filecover->getClientOriginalName();
            $sizeFile = $filecover->getSize();
    
            $replaceNameFile = str_replace(' ', '_', $nameFile);
            $filePath = pathinfo($replaceNameFile, PATHINFO_FILENAME);
            $imgPath = public_path()."/images/portfolio/";
            $dirimage = $imgPath.$nextid."/";
    
            if(!file_exists($dirimage)){
                $mkdir = mkdir($dirimage,0777);
                $filecover->move($dirimage,$replaceNameFile);
            }
            else{
                $filecover->move($dirimage,$replaceNameFile);
            }
    
            $insertNews = DB::table('wme_project')
                ->insert([
                    'project_name'=>$reqPostingAdd->projectTitle,
                    'product_category'=>$reqPostingAdd->projectCategory,
                    'project_desc'=>$reqPostingAdd->projectDesc,
                    'project_date'=>$reqPostingAdd->projectDate,
                    'project_customer'=>$reqPostingAdd->clientName,
                    'project_type'=>$reqPostingAdd->projectType,
                    'lang'=>'id',
                    'img_cover'=>$replaceNameFile,
                ]);
        }
    }

    public function postingAddGallery(Request $addgallery)
    {
        $fileGallery = $addgallery->fileGallery;
        $projectID = $addgallery->idproject;

        $typeFile = $fileGallery->getClientOriginalExtension();
        $nameFile = $fileGallery->getClientOriginalName();
        $sizeFile = $fileGallery->getSize();

        $replaceNameFile = str_replace(' ', '_', $nameFile);
        $filePath = pathinfo($replaceNameFile, PATHINFO_FILENAME);
        $imgPath = public_path()."/images/portfolio/";
        $dirimage = $imgPath.$projectID."/";

        if ($fileGallery<>"") {
            $fileGallery->move($dirimage,$replaceNameFile);

            $insertgallery = DB::table('wme_project_gallery')
                ->insert([
                    'from_project_id'=>$projectID,
                    'gallery_name'=>$replaceNameFile,
                    'gallery_type'=>$typeFile,
                ]);
        }
    }
    public function deleteGalleryNews($iddel)
    {
        DB::table('wme_project_gallery')
            ->where('gallery_id',$iddel)
            ->delete();
    }
    public function newsdelete($iddelnews)
    {
        DB::table('wme_project')
            ->where('project_id',$iddelnews)
            ->delete();
    }
}
