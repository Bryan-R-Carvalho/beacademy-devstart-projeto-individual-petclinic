<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Owner,
    Address,
    Pet
};
use \App\Http\Requests\ValidateFormsRequest;

class OwnerController extends Controller
{
    protected $owner;
    protected $address;
    protected $pet;

    public function __construct(Owner $owner, Address $address, Pet $pet)
    {
        $this->owner = $owner;
        $this->address = $address;
        $this->pet = $pet;
    }
    public function index()
    {
        $owners = Owner::all();
        return view('owners.index', compact('owners'));
    }
    public function show($id)
    {
        $owner = Owner::find($id);
        return view('owners.show', compact('owner'));
    }
    public function create(){
        return view('owners.create');
    }
    public function store(ValidateFormsRequest $request){
        dd($request);
        $owner = $this->owner->store($request);
        $this->address->store($request, $owner);

        return redirect()->route('owners.index');
    }
}
