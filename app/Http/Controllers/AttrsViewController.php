<?php

namespace App\Http\Controllers;

use App\Http\Requests\AttrsViewRequest;
use App\Models\AttrsView;
use Illuminate\Http\Request;

class AttrsViewController extends Controller
{
    public function show(Request $request)
    {
        $attr = AttrsView::where([
            ['src_attr_id_new', $request->srcId],
            ['dwh_attr_id_new', $request->dwhId]
        ])->get();

        return response($attr);
    }

    public function create(AttrsViewRequest $attrsViewRequest)
    {
        $createAttr = AttrsView::create($attrsViewRequest->validated());

        return response($createAttr);
    }

    public function update(AttrsViewRequest $attrsViewRequest)
    {
        $updateAttr = AttrsView::where([
            ['src_attr_id_new', $attrsViewRequest->src_attr_id_new],
            ['dwh_attr_id_new', $attrsViewRequest->dwh_attr_id_new]
        ])->update($attrsViewRequest->validated());

        return response($updateAttr);
    }
}
