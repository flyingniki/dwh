<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class MetaClassesVViewFilter extends QueryFilter
{
    /**
     * @param int $id
     */
    public function id(int $id)
    {
        $this->builder->where('data_class_id', $id);
    }

    /**
     * @param string $name
     */
    public function name(string $name)
    {
        $words = array_filter(explode(' ', $name));

        $this->builder->where(function (Builder $query) use ($words) {
            foreach ($words as $word) {
                $query->where('data_class_name', 'like', "%$word%");
            }
        });
    }

    public function source(string $source)
    {
        $this->builder->where('data_class_source', $source);
    }
}
