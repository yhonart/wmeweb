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
            ->get();

        return view('page.project', compact('data'));
    }

    public function detailProject($id)
    {
        $projectDetail = DB::table('wme_project')
            ->where('project_id',$id)
            ->first();
        
        $projectGallery = DB::table('wme_project_gallery')
            ->where('from_project_id',$id)
            ->get();

        return view('page.project_detail', compact('projectDetail','projectGallery','id'));
    }
}
