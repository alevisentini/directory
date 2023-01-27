<?php

namespace App\Filters;

class BusinessNameFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('name', 'LIKE', "%$value%");
    }
}