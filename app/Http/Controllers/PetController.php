<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Owner,
    Pet
};
class PetController extends Controller
{
    public function __construct(Owner $owner, Pet $pet)
    {
        $this->owner = new $owner;
        $this->pet = new $pet;
    }

    public function index()
    {
        //
    }
    public function show($id)
    {
        $pets = $this->owner->find($id)->pets;
        $owner = $this->owner->find($id);
        return view('pets.show', compact('pets','owner'));
    }
    public function create($id)
    {
        $owner = Owner::findOrFail($id);
        return view('pets.create', compact('owner'));
    }
    public function store(Request $request)
    {
        $this->pet->store($request);
        return redirect()->route('pets.show', $request->owner_id);
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    
}
