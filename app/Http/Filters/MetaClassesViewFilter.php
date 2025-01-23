<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class MetaClassesViewFilter extends QueryFilter
{
    /**
     * @param string $id
     */
    public function id(string $dataClassId)
    {
        $this->builder->where('class_id', $dataClassId);
    }

    /**
     * @param string $name
     */
    public function name(string $dataClassName)
    {
        $words = array_filter(explode(' ', $dataClassName));

        $this->builder->where(function (Builder $query) use ($words) {
            foreach ($words as $word) {
                $query->where('name', 'like', "%$word%");
            }
        });
    }

    /**
     * @param string $dataClassSource
     */
    public function source(string $dataClassSource)
    {
        $this->builder->where('source', $dataClassSource);
    }
}
