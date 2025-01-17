<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaClassAttrsView extends Model
{
    use HasFactory;

    protected $table = 'meta_class_attrs_v';

    // public function classes()
    // {
    //     return $this->belongsTo(
    //         MetaClassesView::class,
    //         'data_class_id',
    //         'data_class_id'
    //     );
    // }
}
