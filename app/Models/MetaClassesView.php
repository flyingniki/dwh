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

    protected $primaryKey = 'data_class_id';

    protected $keyType = 'string';

    protected $fillable = [
        'data_class_name',
        'data_class_direct',
        'data_class_source',
        'data_class_dr',
        'data_class_dict',
        'child_table1',
        'child_table2',
        'description',
        'subsystem',
        'reciever',
        'wiki_link',
        'load_method',
        'last_updated_dev'

    ];

    public $timestamps = false;

    public function metaClassAttrsView()
    {
        return $this->hasMany(
            MetaClassAttrsView::class,
            'class_id',
            'data_class_id'
        );
    }
}
