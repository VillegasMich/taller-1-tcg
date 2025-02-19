@extends('layouts.app')
@section('title', 'Home Page - Online Store')
@section('content')
    <div class="d-flex justify-content-center">
        <div class="btn-group-vertical">
            <a class="btn btn-primary btn-lg btn-block" href="{{ route('tcgCards.create') }}">Create TCG Card</a>
            <a class="btn btn-success btn-lg btn-block" href="{{ route('tcgCards.index') }}">List
                TCG Cards</a>
        </div>
    </div>
@endsection
