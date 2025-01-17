<?php

namespace App\Http\Controllers;

use App\Http\Filters\MetaClassesViewFilter;
use App\Models\MetaClassesView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetaClassesViewController extends Controller
{
    public function showClasses(MetaClassesViewFilter $filter, Request $request)
    {
        $data = MetaClassesView::filter($filter)->get()->toArray();
        $sources = DB::table('meta_classes_v')->distinct('data_class_source')->get('data_class_source')->toArray();
        $requestData = $request->all();

        return view('classes', compact('data', 'sources', 'requestData'));
    }
}
