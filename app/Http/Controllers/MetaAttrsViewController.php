<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetaAttrsViewRequest;
use App\Models\MetaAttrsView;
use Illuminate\Http\Request;

class MetaAttrsViewController extends Controller
{
    public function show(Request $request)
    {
        $attr = MetaAttrsView::where([
            ['src_attr_id_new', $request->srcId],
            ['dwh_attr_id_new', $request->dwhId]
        ])->get();

        return response($attr);
    }

    public function create(MetaAttrsViewRequest $MetaAttrsViewRequest)
    {
        $createAttr = MetaAttrsView::create($MetaAttrsViewRequest->validated());

        return response($createAttr);
    }

    public function update(MetaAttrsViewRequest $MetaAttrsViewRequest)
    {
        $updateAttr = MetaAttrsView::where([
            ['src_attr_id_new', $MetaAttrsViewRequest->src_attr_id_new],
            ['dwh_attr_id_new', $MetaAttrsViewRequest->dwh_attr_id_new]
        ])->update($MetaAttrsViewRequest->validated());

        return response($updateAttr);
    }
}
