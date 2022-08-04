<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\{
    Vaccine,
    VaccinePet,
    Pet
};
use Termwind\Components\Dd;

class VaccinePetController extends Controller
{
        protected $vaccine;
        protected $pet;
        protected $vaccinepet;

        public function __construct(Vaccine $vaccine, Pet $pet, VaccinePet $vaccinepet)
        {
            $this->vaccine = new $vaccine;
            $this->pet = new $pet;
            $this->vaccinepet = new $vaccinepet;
        }
    
        public function index()
        {
            $vaccines = $this->vaccine->paginate(8);
            return view('vaccinepet.index', compact('vaccines'));
        }
        public function create()
        {
            $vaccines = $this->vaccine->all();
            $pets = $this->pet->all();
            return view('vaccinepet.create', compact('vaccines', 'pets'));
        }
        public function store(Request $request)
        {
            $vaccinepet = new VaccinePet;
            $vaccinepet->vaccine_id = $request->input('vaccine_id');
            $vaccinepet->pet_id = $request->input('pet_id');
            $vaccinepet->date = $request->input('date');
            $vaccinepet->save();
            return redirect()->back()->with('success', 'Vacinação cadastrada com sucesso!');
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
