<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    public function business()
    {
        return $this->belongsTo(Business::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
