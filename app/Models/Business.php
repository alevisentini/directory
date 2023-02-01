<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Filters\BusinessFilter;

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
        return $this->belongsTo(Status::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function activity()
    {
        return $this->belongsTo(Activity::class);
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
        return $this->belongsTo(Filing::class);
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

    public function state()
    {
        return $this->belongsTo(State::class);
    }


    public static function scopeName($query, $name)
    {
        if ($name) {
            return $query->where('name', 'LIKE', "%$name%");
        }
    }

    public function scopeForeign_legal_name($query, $foreign_legal_name)
    {
        if ($foreign_legal_name) {
            return $query->where('foreign_legal_name', 'LIKE', "%$foreign_legal_name%");
        }
    }

    public function scopeFictitious_name($query, $fictitious_name)
    {
        if ($fictitious_name) {
            return $query->where('fictitious_name', 'LIKE', "%$fictitious_name%");
        }
    }

    public function scopeStatus($query, $status_id)
    {
        if ($status_id) {
            return $query->where('status_id', 'LIKE', "%$status_id%");
        }
    }


    public function scopeFilter(Builder $builder, $request)
    {
        return (new BusinessFilter($request))->filter($builder);
    }

}
