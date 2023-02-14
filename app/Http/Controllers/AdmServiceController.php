<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facedes\File;
use Illuminate\Support\Facedes\Storage;

class AdmServiceController extends Controller
{
    public function services(){
        return view('admin_page/ServicesPage');
    }

    public function tableservices ($lang) {
        $tableproduk = DB::table('wme_product')
            ->where('lang',$lang)
            ->get();

        return view('admin_page/ServiceTable', compact('tableproduk'));
    }

    public function editservice ($id)
    {
        $editservice = DB::table('wme_product')
            ->where('product_id',$id)
            ->first();
        
        return view('admin_page/ServiceEdit', compact('editservice'));
    }

    public function postingeditservice (Request $requpdatesrv)
    {
        $updateprod = DB::table('wme_product')
            ->where('product_id',$requpdatesrv->idproduk)
            ->update([
                'product_title'=>$requpdatesrv->editproduk,
                'product_subtitle'=>$requpdatesrv->editsubtitle,
                'product_content'=>$requpdatesrv->editcontent,
            ]);
    }
}
