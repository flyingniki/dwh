<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaClassAttrsView extends Model
{
    use HasFactory;

    protected $table = 'meta_class_attrs_v';

    protected $primaryKey = 'class_id';

    protected $keyType = 'string';

    public $incrementing = false;

    public function metaClassesView()
    {
        return $this->belongsTo(
            MetaClassesView::class,
            'class_id',
            'data_class_id'
        );
    }
}
