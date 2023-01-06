<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function listproject()
    {
        $locale = App::currentLocale();
        $data = DB::table('wme_project')
            ->where('lang',$locale)
            ->get();

        return view('page.project',);
    }
}
