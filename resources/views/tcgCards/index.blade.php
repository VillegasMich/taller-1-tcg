@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="row">
        @foreach ($viewData['tcgCards'] as $tcgCard)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    @if ($tcgCard['franchise'] == 'Pokemon')
                        <img src="{{ asset('pokemon_card_backside.png') }}" class="img-fluid rounded-start">
                    @elseif ($tcgCard['franchise'] == 'Yu-Gi-Oh!')
                        <img src="{{ asset('yugioh_card_backside.png') }}" class="img-fluid rounded-start">
                    @else
                        <img src="{{ asset('magic_card_backside.png') }}" class="img-fluid rounded-start">
                    @endif
                    <div class="card-body text-center">
                        <a href="{{ route('tcgCards.show', $tcgCard['id']) }}"
                            class="btn bg-primary text-white">{{ $tcgCard['id'] }} - {{ $tcgCard['name'] }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
