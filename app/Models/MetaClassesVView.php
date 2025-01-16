<?php

namespace App\Models;

use App\Http\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaClassesVView extends Model
{
    use HasFactory;
    use Filterable;

    protected $table = 'meta_classes_v';
}
