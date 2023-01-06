<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;


class PageController extends Controller
{
    public function aboutme ()
    {
        $locale = App::currentLocale();
        $aboutus = DB::table('wme_about_us')
        ->where([
            ['lang',$locale],
            ['page_code','AM'],
            ])
            ->first();
        $vision = DB::table('wme_vision')
            ->where('lang',$locale)
            ->first();

        return view('page.aboutme', compact('aboutus','vision'));
    }

    public function quality ()
    {
        $locale = App::currentLocale();
        $quality = DB::table('wme_about_us')
        ->where([
            ['lang',$locale],
            ['page_code','QP'],
            ])
            ->first();
        return view('page.quality', compact('quality'));
    }
}
