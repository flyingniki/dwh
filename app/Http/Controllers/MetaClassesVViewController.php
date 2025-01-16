<?php

namespace App\Http\Controllers;

use App\Http\Filters\MetaClassesVViewFilter;
use App\Models\MetaClassesVView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetaClassesVViewController extends Controller
{
    public function show(MetaClassesVViewFilter $filter, Request $request)
    {
        $data = MetaClassesVView::filter($filter)->get()->toArray();
        $sources = DB::table('meta_classes_v')->distinct('data_class_source')->get('data_class_source')->toArray();
        $requestData = $request->all();

        return view('show', compact('data', 'sources', 'requestData'));
    }
}
