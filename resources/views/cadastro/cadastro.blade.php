@extends('layouts.main')
@section('title')
@section('content')

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome da Compra</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome da Compra">
            </div>
            <div class="form-group col-md-6">
                <label for="datacompra">Data Da Compra</label>
                <input type="date" class="form-control" id="datacompra" placeholder="Data Da Compra">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="formpagamento">Forma de Pagamento</label>
                <input type="text" class="form-control" id="formpagamento" placeholder="Forma de Pagamento">
            </div>
            <div class="form-group col-md-6">
                <label for="datavencimento">Data de Vencimento</label>
                <input type="date" class="form-control" id="datavencimento" placeholder="Data de Vencimento">

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>

@endsection
