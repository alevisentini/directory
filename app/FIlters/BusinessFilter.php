<?php

namespace App\Filters;

use App\Filters\AbstractFilter;
use App\Models\Business;
use Illuminate\Database\Eloquent\Builder;

class BusinessFilter extends AbstractFilter
{
    protected $filters = [
        'status_id' => StatusFilter::class,
        'type_id' => TypeFilter::class,
        'activity_id' => ActivityFilter::class,
        'state_id' => StateFilter::class,
        'name' => BusinessNameFilter::class,
    ];
}