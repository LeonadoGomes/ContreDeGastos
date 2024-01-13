@extends('layouts.main')
@section('title')
@section('content')

    <form action="/cadastro" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nome">Nome da Compra</label>
                <input type="text" class="form-control" id="nome" placeholder="Nome da Compra" name="nome">
            </div>
            <div class="form-group col-md-6">
                <label for="datacompra">Data Da Compra</label>
                <input type="date" class="form-control" id="datacompra" placeholder="Data Da Compra" name="datacompra">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="formpagamento">Forma de Pagamento</label>
                <select id="formpagamento" class="form-control" name="formpagamento">
                    <option selected>Selecione</option>
                    <option>Cartão</option>
                    <option>Dinheiro</option>
                    <option>Pix</option>
                    <option>Parcelado</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="datavencimento">Data de Vencimento</label>
                <input type="date" class="form-control" id="datavencimento" placeholder="Data de Vencimento"
                    name="datavencimento">

            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="parcelas">Número de Parcelas</label>
                <input type="number" class="form-control" id="parcelas" placeholder="Número de Parcelas" name="parcelas">
            </div>
            <div class="form-group col-md-3">
                <label for="preco" class="title1">Preço:</label>
                <input type="text" class="form-control" id="preco" name="preco" placeholder="Preço do Produto"
                    pattern="[0-9]+([.,][0-9]+)?"
                    title="Use apenas números e, opcionalmente, um ponto ou vírgula para decimais">
            </div>
            <div class="form-group col-md-2">
                <label for="status">Status</label>
                <select id="status" class="form-control" name="status">
                    <option selected>Selecione</option>
                    <option>Aberto</option>
                    <option>Pago</option>
                    <option>Pendente</option>
                    <option>Atrasado</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="address">Local da Compra</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

@endsection
