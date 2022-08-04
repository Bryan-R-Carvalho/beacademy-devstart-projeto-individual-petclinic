@extends("template.layout")
@section('title', 'Cadastrar vacinação')
@section('body')
    <div class="container w-50">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
            </div>
        @endif
        <h1>Cadastro de vacinação</h1>
        <form action="{{ route('vaccinepet.store') }}" method="POST">
        @csrf
        <div class="form-group">
                <label for="vaccines">Vacina</label>
                <select name="vaccine_id" class="form-control" required>
                    <option value="">Selecione uma vacina</option>
                    @foreach($vaccines as $vaccine)
                        <option value="{{$vaccine->id}}">{{$vaccine->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="pets">Pet</label>
                <select name="pet_id" class="form-control" required>
                    <option value="">Selecione um pet</option>
                    @foreach($pets as $pet)
                        <option value="{{$pet->id}}">{{$pet->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="date">Data</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>

                <button type="submit" class="btn btn-success mt-2 mb-5">Cadastrar</button>
        
        </form>
@endsection