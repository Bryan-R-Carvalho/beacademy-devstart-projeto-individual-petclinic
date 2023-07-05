<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Vaccine,
    Pet
};

class VaccineController extends Controller
{
    protected $vaccine;
    protected $pet;

    public function __construct(Vaccine $vaccine, Pet $pet)
    {
        $this->vaccine = $vaccine;
        $this->pet = $pet;
    }

    public function index(Request $request)
    {
        if($request->input('search')){
            $search = $request->input('search');
            $vaccines = $this->vaccine->where('name', 'ILIKE', "$search%")
            ->orWhere('brand', 'ILIKE', "$search%")
            ->paginate(6);
            
            return view('vaccines.index', compact('vaccines'));
        }
        $vaccines = $this->vaccine->paginate(6);
        return view('vaccines.index', compact('vaccines'));
    }
    public function create()
    {
        return view('vaccines.create');
    }
    public function store(Request $request)
    {
        $this->vaccine->create($request->all());
        return redirect()->route('vaccines.index')->with('success', 'vacina cadastrada com sucesso!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $vaccine = Vaccine::findOrFail($id);
        return view('vaccines.edit', compact('vaccine'));
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $vaccine = Vaccine::find($id);
        $vaccine->update($data);
        return redirect()->route('vaccines.index')->with('success', 'vacina alterada com sucesso!');;

    }
    public function destroy($id)
    {
        //
    }
    
}
