<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'species',
        'age',
        'breed',
        'color',
        'hair_type',
        'weight',
        'gender',
        'details',
        'owner_id',
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(Owner::class);
    }
    public function vaccinePet()
    {
        return $this->hasMany(VaccinePet::class);
    }
}
