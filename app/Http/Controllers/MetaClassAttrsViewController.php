<?php

namespace App\Http\Controllers;

use App\Http\Requests\MetaClassAttrsViewRequest;
use App\Models\MetaClassAttrsView;
use Illuminate\Http\Request;

class MetaClassAttrsViewController extends Controller
{
    public function showAllAttrs()
    {
        $attrs = MetaClassAttrsView::all();

        return view('attributes', compact('attrs'));
    }

    public function showClassAttr(string $classId)
    {
        $attrs = MetaClassAttrsView::where('class_id', $classId)->get();

        return view('attributes', compact('attrs'));
    }

    public function updateClassAttr(MetaClassAttrsViewRequest $request, MetaClassAttrsView $metaClassAttrsView)
    {
        dd($request->all());
        if ($request->isMethod('patch')) {
            return redirect()->route('class.attr')->with('message', 'Запись успешно добавлена!');
        } else {
            return redirect()->route('class.attr')->with('error', 'Ошибка добавления!');
        }
    }
}
