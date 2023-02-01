<?php

namespace App\Filters;

class ActivityFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('activity_id', $value);
    }
}