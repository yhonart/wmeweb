<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $locale = App::currentLocale();
        $wmeclient = DB::table('wme_client')
            ->where('client_colom_view','1')
            ->orderBy('client_img_name','asc')
            ->get();
        $wmeclient2 = DB::table('wme_client')
            ->where('client_colom_view','2')
            ->orderBy('client_img_name','asc')
            ->get();        
        $aboutus = DB::table('wme_about_us')
            ->where([
                ['lang',$locale],
                ['page_code','AM'],
                ])
            ->first();
        $vision = DB::table('wme_vision')
            ->where('lang',$locale)
            ->first();

        $product = DB::table('wme_product')
            ->where('lang',$locale)
            ->get();

        $ournews = DB::table('wme_project')
            ->where('project_type','2')
            ->get();

        return view('home', compact('wmeclient','wmeclient2','aboutus','vision','product','ournews'));
    }

    public function projectcategory(Request  $reqCategory)
    {
        $category = $reqCategory->Category;

        $project = DB::table('wme_project');
            $project=$project->where('project_type','1');
            if ($category<>'ALL') {
                $project=$project->where('product_category',$category);
            }
            $project=$project->get();
        return view('redirect.project', compact('project'));
    }
}
