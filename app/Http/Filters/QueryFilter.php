<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class QueryFilter implements FilterInterface
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var Builder
     */
    protected $builder;

    /**
     * @param Request $request
     */
    public function __construct(Builder $builder, Request $request)
    {
        $this->builder = $builder;
        $this->request = $request;
    }

    /**
     * @param Builder $builder
     */
    public function apply(Builder $builder)
    {
        $this->builder = $builder;

        foreach ($this->fields() as $field => $value) {
            if (method_exists($this, $field)) {
                call_user_func_array([$this, $field], (array)$value);
            }
        }

        return $this->builder;
    }

    /**
     * @return array
     */
    protected function fields(): array
    {
        return array_filter(
            array_map('trim', $this->request->all())
        );
    }
}
