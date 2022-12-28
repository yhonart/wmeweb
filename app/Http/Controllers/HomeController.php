<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $wmeclient = DB::table('wme_client')
            ->where('client_colom_view','1')
            ->orderBy('client_img_name','asc')
            ->get();
        $wmeclient2 = DB::table('wme_client')
            ->where('client_colom_view','2')
            ->orderBy('client_img_name','asc')
            ->get();

        return view('home', compact('wmeclient','wmeclient2'));
    }
}
