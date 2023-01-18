<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'location',
    ];

    public function scopeName($query, $name)
    {
        if ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        }
    }

    public function scopeDescription($query, $email)
    {
        if ($email) {
            return $query->where('description', 'LIKE', "%$email%");
        }
    }

    public function scopeLocation($query, $phone)
    {
        if ($phone) {
            return $query->where('location', 'LIKE', "%$phone%");
        }
    }
}
