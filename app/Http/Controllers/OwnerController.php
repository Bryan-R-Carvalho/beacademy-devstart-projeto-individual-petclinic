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
    protected $pet;

    public function __construct(Owner $owner, Pet $pet)
    {
        $this->owner = $owner;
        $this->pet = $pet;
    }
    public function index()
    {
        $owners = $this->owner->paginate(6);
        return view('owners.index', compact('owners'));
    }
    public function show($id)
    {
        $owner = Owner::findOrFail($id);
        return view('owners.show', compact('owner'));
    }
    public function create(){
        return view('owners.create');
    }
    public function store(Request $request){
       $owner = $this->owner->store($request);
        return redirect()->route('owners.index');
    }

    public function edit($id){
        $owner = Owner::findOrFail($id);
        return view('owners.edit', compact('owner'));
    }
    public function update(Request $request, $id){
        $owner = Owner::findOrFail($id);
        $owner->update($request->all());
        return redirect()->route('owners.show', $id);
    }
}
