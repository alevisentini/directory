<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->hasOne(Status::class);
    }

    public function type()
    {
        return $this->hasOne(Type::class);
    }

    public function activity()
    {
        return $this->hasOne(Activity::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

}
