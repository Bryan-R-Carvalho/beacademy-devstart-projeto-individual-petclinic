@extends("template.layout")
@section('title', 'Vacinas do ' .$pet->name)
@section('body')
    <div class="container w-50">
        <h1>Vacinas do {{$pet->name}}</h1>
        <?php
            $pets = DB::table('vaccines_pets')->where('pet_id', $pet->id)->get();
        ?>
        @foreach($pets as $pet)
            <div class="card">
                <div class="card-body">
                    <strong>Data: </strong> <p class="card-title">{{ $pet->date }}</p>
                    <strong>Medicamento:</strong><p class="card-text">{{ $pet->vaccine->name }}</p>
                </div>
            </div>
        @endforeach
        <a href="{{ route('vaccinepet.index') }}" class="btn btn-primary mt-2 mb-5">Voltar</a>
        
        <div class="d-flex justify-content-center mt-5">
            {{ $vaccines->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection