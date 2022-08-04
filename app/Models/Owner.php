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
        'street',
        'postal_code',
        'city',
        'state',

    ];
    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

    public function store($data){
        $owner = new Owner;
        $this->name = $data->name;
        $this->email = $data->email;
        $this->phone = $data->phone;
        $this->street = $data->street;
        $this->postal_code = $data->postal_code;
        $this->city = $data->city;
        $this->state = $data->state;
        $this->save();
        return $owner->id;
    }
}
