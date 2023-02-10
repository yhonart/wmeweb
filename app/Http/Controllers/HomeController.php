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
        $project = DB::table('wme_project')
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

        return view('home', compact('wmeclient','wmeclient2','project','aboutus','vision','product'));
    }
}
