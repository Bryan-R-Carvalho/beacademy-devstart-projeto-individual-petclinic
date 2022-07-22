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
        return view('owners.show', compact('pets','owner'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
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
