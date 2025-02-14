<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetaClassAttrsViewRequest;
use App\Models\MetaClassAttrsView;
use Illuminate\Http\Request;

class MetaClassAttrsViewController extends Controller
{
    public function detailAttr(Request $request)
    {
        $attr = MetaClassAttrsView::where([
            ['src_attr_id_new', $request->srcId],
            ['dwh_attr_id_new', $request->dwhId]
        ])->get();

        return response($attr);
    }

    public function updateAttr(MetaClassAttrsViewRequest $metaClassAttrsViewRequest)
    {
        $updateAttr = MetaClassAttrsView::where([
            ['src_attr_id_new', $metaClassAttrsViewRequest->src_attr_id_new],
            ['dwh_attr_id_new', $metaClassAttrsViewRequest->dwh_attr_id_new]
        ])->update($metaClassAttrsViewRequest->validated());

        return response($updateAttr);
    }
}
