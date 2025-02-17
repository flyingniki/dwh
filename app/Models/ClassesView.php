<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassesView extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'classes_v';

    protected $primaryKey = 'class_id';

    protected $keyType = 'string';

    protected $fillable = [
        'name',
        'in_out',
        'source',
        'stage_table',
        'core_table',
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

    public function metaAttrsView()
    {
        return $this->hasMany(
            MetaAttrsView::class,
            'class_id',
            'class_id'
        );
    }
}
