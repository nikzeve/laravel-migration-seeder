@extends('layouts.app')

@section('content')
    @foreach ($lista_prodotti as $prodotto)
    <p>{{ $prodotto->type }}</p>
    @endforeach
@endsection


@section('page-title', 'Prodotti')
