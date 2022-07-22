<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'postal_code',
        'address',
        'district',
        'city',
        'country',
        'state',
        'owner_id',
        'created_at',
        'updated_at'
    ];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function store($data, $id)
    {
        $address    = new Address;
        $address->address   = $data->address;
        $address->district  = $data->district;
        $address->postal_code  = $data->postal_code;
        $address->city      = $data->city;
        $address->state     = $data->state;
        $address->country   = $data->country;
        $address->owner_id   = $id;
        $address->save();
    }
}
