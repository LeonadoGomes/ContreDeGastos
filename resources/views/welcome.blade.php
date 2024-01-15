@extends('layouts.main')
@section('title', 'Listagem')
@section('content')

    <div class="col-md-12">
        @if (count($cadastros) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome da Compra</th>
                            <th scope="col">Data da Compra</th>
                            <th scope="col">Forma de Pagamento</th>
                            <th scope="col">Data de Vencimento</th>
                            <th scope="col">Parcelas</th>
                            <th scope="col">Status</th>
                            <th scope="col">Local da Compra</th>
                            <th scope="col">Preço</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cadastros as $cadastro)
                            <tr>
                                <td>{{ $cadastro->id }}</td>
                                <td>{{ $cadastro->nome }}</td>
                                <td>{{ \Carbon\Carbon::parse($cadastro->datacompra)->format('d/m/Y') }}</td>
                                <td>{{ $cadastro->formpagamento }}</td>
                                <td>{{ \Carbon\Carbon::parse($cadastro->datacompra)->format('d/m/Y') }}</td>
                                <td>{{ $cadastro->parcelas }}</td>
                                <td>{{ $cadastro->status }}</td>
                                <td>{{ $cadastro->address }}</td>
                                <td>R$ {{ $cadastro->preco }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

@endsection
