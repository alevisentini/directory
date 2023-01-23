<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function members()
    {
        return $this->belongsTo(Members::class);
    }
}
