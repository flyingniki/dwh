<?php

namespace App\Http\Controllers;

use App\Http\Filters\ClassesViewFilter;
use App\Http\Requests\ClassesViewRequest;
use App\Models\AttrsView;
use App\Models\ClassesView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClassesViewController extends Controller
{
    public function show(ClassesViewFilter $filter, Request $request)
    {
        $data = ClassesView::filter($filter)->get();
        $sources = DB::table('classes_v')->distinct('source')->get('source');
        $requestData = $request->all();

        return view('classes', compact('data', 'sources', 'requestData'));
    }

    public function detail(ClassesView $classesView)
    {
        $classAttrs = AttrsView::where('class_id', $classesView->class_id)->get();

        return view('detail-class', compact('classesView', 'classAttrs'));
    }

    public function update(ClassesViewRequest $classesViewRequest, ClassesView $classesView)
    {
        $updateClass = $classesView->update($classesViewRequest->validated());

        return response($updateClass);
    }
}
