<?php

namespace App\Http\Controllers;

use App\Models\MetaClassAttrsView;
use App\Models\MetaClassesView;
use Illuminate\Http\Request;

class MetaClassAttrsViewController extends Controller
{
    public function showAllAttrs()
    {
        $attrs = MetaClassAttrsView::all();

        return view('all-attributes', compact('attrs'));
    }
}
