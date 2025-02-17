<?php

namespace App\Http\Controllers;

use App\Http\Filters\ClassesViewFilter;
use App\Http\Requests\ClassesViewRequest;
use App\Models\MetaAttrsView;
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

    public function detail(ClassesView $ClassesView)
    {
        $classAttrs = MetaAttrsView::where('class_id', $ClassesView->class_id)->get();

        return view('detail-class', compact('ClassesView', 'classAttrs'));
    }

    public function update(ClassesViewRequest $ClassesViewRequest, ClassesView $ClassesView)
    {
        $ClassesView->update($ClassesViewRequest->validated());

        return redirect()->back()->with('status', 'Class updated successfully!');
    }
}
