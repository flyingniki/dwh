<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class MetaClassesViewFilter extends QueryFilter
{
    /**
     * @param int $id
     */
    public function id(int $dataClassId)
    {
        $this->builder->where('data_class_id', $dataClassId);
    }

    /**
     * @param string $name
     */
    public function name(string $dataClassName)
    {
        $words = array_filter(explode(' ', $dataClassName));

        $this->builder->where(function (Builder $query) use ($words) {
            foreach ($words as $word) {
                $query->where('data_class_name', 'like', "%$word%");
            }
        });
    }

    /**
     * @param string $dataClassSource
     */
    public function source(string $dataClassSource)
    {
        $this->builder->where('data_class_source', $dataClassSource);
    }
}
