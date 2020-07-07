@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Prodotti</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TIPO</th>
                            <th>NOME PRODOTTO</th>
                            <th>QUANTITA'</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lista_prodotti as $prodotto)
                            <tr>
                                <td>{{ $prodotto->id }}</td>
                                <td>{{ $prodotto->type }}</td>
                                <td>{{ $prodotto->name_of_product }}</td>
                                <td>{{ $prodotto->quantity }}</td>
                            </tr>

                        @endforeach
                    </tbody>

                </table>
            </div>

        </div>

    </div>
@endsection


@section('page-title', 'Prodotti')
