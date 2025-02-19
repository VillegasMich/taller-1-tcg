@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('pokemon_card_backside.png') }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData['tcgCard']['name'] }}
                    </h5>
                    <p class="card-text">{{ $viewData['tcgCard']['description'] }}</p>
                    <p class="card-text"><span class="fw-bold">Precio:</span> ${{ $viewData['tcgCard']['price'] }}</p>
                    <p class="card-text"><span class="fw-bold">Franquicia:</span>{{ $viewData['tcgCard']['franchise'] }}</p>
                    <p class="card-text"><span class="fw-bold">Coleccion:</span>{{ $viewData['tcgCard']['collection'] }}</p>
                    <p class="card-text"><span class="fw-bold">Grado PSA:</span>{{ $viewData['tcgCard']['PSAgrade'] }}</p>
                    <p class="card-text"><span class="fw-bold">Rareza:</span>{{ $viewData['tcgCard']['rarity'] }}</p>
                    <p class="card-text"><span class="fw-bold">Lenguaje:</span>{{ $viewData['tcgCard']['language'] }}</p>
                    <p class="card-text"><span class="fw-bold">En bodega:</span>{{ $viewData['tcgCard']['stock'] }}</p>
                </div>
                <div class="card-footer">
                    <form action="{{ route('tcgCards.delete', $viewData['tcgCard']['id']) }}" method="POST"
                        onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar Carta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
