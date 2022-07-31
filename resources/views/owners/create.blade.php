@extends("template.layout")
@section('title', 'Cadastrar tutor')
@section('body')
<div class="container w-50">
    <div class="row">
        <div class="col-12">
            <h1>Cadastrar tutor</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{route('owners.store')}}" method="POST">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="text" name="phone" id="phone" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="street">Endereço</label>
                    <input type="text" name="street" id="street" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="city">Cidade</label>
                    <input type="text" name="city" id="city" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="state">Estado</label>
                    <input type="text" name="state" id="state" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="postal_code">CEP</label>
                    <input type="text" name="postal_code" id="postal_code" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>    
    </div>
</div>
@endsection