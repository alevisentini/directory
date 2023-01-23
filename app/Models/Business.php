<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

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

    public function filing()
    {
        return $this->hasOne(Filing::class);
    }

    public function report()
    {
        return $this->hasMany(Report::class);
    }

    public function members()
    {
        return $this->hasMany(Members::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }

    public function agent()
    {
        return $this->hasMany(Agent::class);
    }


    public function scopeName($query, $name)
    {
        if ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        }
    }

    public function scopeFeinEinNumber($query, $fein_ein_number)
    {
        if ($fein_ein_number) {
            return $query->where('fein_ein_number', 'LIKE', "%$fein_ein_number%");
        }
    }

}
