<?php

namespace App\Filters;

class StateFilter
{
    public function filter($builder, $value)
    {
        return $builder->where('state_id', $value);
    }
}