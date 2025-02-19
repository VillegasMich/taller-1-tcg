@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert">
                Card created successfully!
                <a href="{{ route('tcgCards.index') }}" class="alert-link">Go back to the list of cards</a>
            </div>
        </div>
    </div>
@endsection
