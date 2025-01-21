<?php

namespace App\Http\Controllers;

use App\Http\Filters\MetaClassesViewFilter;
use App\Http\Requests\MetaClassesViewRequest;
use App\Models\MetaClassAttrsView;
use App\Models\MetaClassesView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MetaClassesViewController extends Controller
{
    public function showClasses(MetaClassesViewFilter $filter, Request $request)
    {
        $data = MetaClassesView::filter($filter)->get();
        $sources = DB::table('meta_classes_v')->distinct('data_class_source')->get('data_class_source');
        $requestData = $request->all();

        return view('classes', compact('data', 'sources', 'requestData'));
    }

    public function detailClass(MetaClassesView $metaClassesView)
    {
        $classAttrs = MetaClassAttrsView::where('class_id', $metaClassesView->data_class_id)->get();

        return view('class-attributes', compact('metaClassesView', 'classAttrs'));
    }

    // public function editClassAttr(string $id)
    // {
    //     return view('attributes.edit', ['data_class_id' => $id]);
    // }

    // public function updateClassAttr(MetaClassesViewRequest $metaClassesViewRequest) {}
}
