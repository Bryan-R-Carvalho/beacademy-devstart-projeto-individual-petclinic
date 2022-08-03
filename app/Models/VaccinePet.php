<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'pet_id',
        'vaccine_id',
        'created_at',
        'updated_at'
    ];
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function vaccine()
    {
        return $this->belongsTo(Vaccine::class);
    }
}
    