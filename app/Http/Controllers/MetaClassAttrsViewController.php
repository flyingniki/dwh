<?php

namespace App\Http\Controllers;

use App\Models\MetaClassAttrsView;
use App\Models\MetaClassesView;
use Illuminate\Http\Request;

class MetaClassAttrsViewController extends Controller
{
    public function showAllAttrs()
    {
        $attrs = MetaClassAttrsView::all()->toArray();

        return view('attributes', compact('attrs'));
    }

    public function showClassAttr($classId)
    {
        $attrs = MetaClassAttrsView::all()->where('class_id', $classId)->toArray();

        return view('attributes', compact('attrs'));
    }
}
