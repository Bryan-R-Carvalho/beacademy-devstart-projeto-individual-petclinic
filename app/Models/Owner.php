<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'created_at',
        'updated_at'
    ];
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }
    public function addresses()
    {
        return $this->hasOne(Address::class);
    }
}
