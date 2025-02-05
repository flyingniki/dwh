<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetaClassAttrsViewRequest;
use App\Http\Requests\MetaClassesViewRequest;
use App\Models\MetaClassAttrsView;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MetaClassAttrsViewController extends Controller
{
    public function showAttrs()
    {
        $attrs = MetaClassAttrsView::all();

        return view('all-attributes', compact('attrs'));
    }

    public function detailAttr(Request $request)
    {
        $attr = MetaClassAttrsView::where([['src_attr_id_new', $request->srcId], ['dwh_attr_id_new', $request->dwhId]])->get();

        return response($attr);
    }

    public function updateAttr(MetaClassesViewRequest $metaClassesViewRequest)
    {
        $updateAttr = MetaClassAttrsView::where([['src_attr_id_new', $metaClassesViewRequest->srcId], ['dwh_attr_id_new', $metaClassesViewRequest->dwhId]])
            ->update($metaClassesViewRequest->validated());

        return response($updateAttr);
    }
}
