@extends("template.layout")
@section('title', 'Vacinas do ' .$pet->name)
@section('body')
    <div class="container w-50">
        <h1>Vacinas do {{$pet->name}}</h1>
        <?php
            $vaccines = DB::table('vaccines_pets')
                ->join('vaccines', 'vaccines_pets.vaccine_id', '=', 'vaccines.id')
                ->select('vaccines.name', 'vaccines_pets.date')
                ->where('vaccines_pets.pet_id', '=', $pet->id)
                ->get();
        ?>
        @foreach($vaccines as $vax)
            <div class="card">
                <div class="card-body">
                    <strong>Data: </strong> <p class="card-title">{{ $vax->date }}</p>
                    <strong>Medicamento:</strong><p class="card-text">{{ $vax->name }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection