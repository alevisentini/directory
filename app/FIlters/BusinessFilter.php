<?php

namespace App\Filters;

use App\Filters\AbstractFilter;
use App\Models\Business;
use Illuminate\Database\Eloquent\Builder;

class BusinessFilter extends AbstractFilter
{
    protected $filters = [
        'status_id' => StatusFilter::class,
        'name' => BusinessNameFilter::class,
    ];
}