<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetaClassAttrsViewRequest;
use App\Models\MetaClassAttrsView;
use Illuminate\Http\Request;

class MetaClassAttrsViewController extends Controller
{
    public function showAttrs()
    {
        $attrs = MetaClassAttrsView::all();

        return view('all-attributes', compact('attrs'));
    }

    public function updateAttr(MetaClassAttrsViewRequest $metaClassAttrsViewRequest, MetaClassAttrsView $metaClassAttrsView)
    {
        dd($metaClassAttrsView);
        $metaClassAttrsView->update($metaClassAttrsViewRequest->validated());

        // return redirect()->back()->with('status', 'Class updated successfully!');
    }
}
