<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaClassesView extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'meta_classes_v';

    public function metaClassAttrsView()
    {
        return $this->hasMany(
            MetaClassAttrsView::class,
            'class_id',
            'data_class_id'
        );
    }
}
