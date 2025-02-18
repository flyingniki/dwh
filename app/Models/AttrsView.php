<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttrsView extends Model
{
    use HasFactory;

    protected $table = 'attrs_v';

    protected $primaryKey = 'class_id';

    protected $keyType = 'string';

    protected $fillable = [
        'class_id',

        'src_attr_id',
        'src_name',
        'src_type',
        'src_descr',
        'src_comments',
        'src_sample_value',
        'src_store_in_dwh',
        'src_subclass_id',
        'src_is_drop',
        'src_is_system',
        'src_fk_class',

        'src_attr_id_new',
        'src_name_new',
        'src_type_new',
        'src_descr_new',
        'src_comments_new',
        'src_sample_value_new',
        'src_store_in_dwh_new',
        'src_subclass_id_new',
        'src_is_drop_new',
        'src_is_system_new',
        'src_fk_class_new',

        'dwh_attr_id',
        'dwh_name',
        'dwh_type',
        'dwh_descr',
        'dwh_is_pk',
        'dwh_is_mandatory',
        'dwh_sample_value',
        'dwh_is_drop',
        'dwh_is_system',
        'dwh_is_auto',
        'dwh_is_unique',
        'dwh_is_indexed',

        'dwh_attr_id_new',
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

    public function ClassesView()
    {
        return $this->belongsTo(
            ClassesView::class,
            'class_id',
            'class_id'
        );
    }
}
