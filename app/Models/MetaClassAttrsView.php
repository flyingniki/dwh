<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaClassAttrsView extends Model
{
    use HasFactory;

    protected $table = 'meta_class_attrs_v3';

    protected $primaryKey = 'class_id';

    protected $keyType = 'string';

    protected $fillable = [
        'src_name_new',
        'src_type_new',
        'src_descr_new',
        'src_comments_new',
        'src_sample_value_new',
        'src_subclass_id_new',
        'src_ref_to_new',
        'src_is_drop_new',
        'src_is_system_new',
        'src_fk_class_new',
        'src_store_in_dwh_new',

        'dwh_name_new',
        'dwh_type_new',
        'dwh_descr_new',
        'dwh_is_pk_new',
        'dwh_is_mandatory_new',
        'dwh_sample_value_new',
        'dwh_is_drop_new',
        'dwh_is_system_new',
        'dwh_is_auto_new',
        'dwh_is_unique_new',
        'dwh_is_indexed_new'
    ];

    public $incrementing = false;

    public $timestamps = false;

    public function metaClassesView()
    {
        return $this->belongsTo(
            MetaClassesView::class,
            'class_id',
            'class_id'
        );
    }
}
