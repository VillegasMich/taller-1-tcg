@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a TCGCard</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <ul id="errors" class="alert alert-danger list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <div class="container">
                            <div class="row align-items-center">

                                <!-- Left Column: Image -->
                                <div class="col-md-6 text-center">
                                    <img src="{{ asset('pokemon_card_backside.png') }}" alt="TCG Card Image"
                                        class="img-fluid">
                                </div>

                                <!-- Right Column: Form -->
                                <div class="col-md-6">
                                    <form method="POST" action="{{ route('tcgCards.save') }}">
                                        @csrf
                                        <input type="text" class="form-control mb-2" placeholder="Enter name"
                                            name="name" value="{{ old('name') }}" />
                                        <textarea class="form-control mb-2" placeholder="Enter description" name="description">{{ old('description') }}</textarea>
                                        <input type="text" class="form-control mb-2" placeholder="Enter franchise"
                                            name="franchise" value="{{ old('franchise') }}" />
                                        <input type="text" class="form-control mb-2" placeholder="Enter collection"
                                            name="collection" value="{{ old('collection') }}" />
                                        <input type="number" step="0.01" class="form-control mb-2"
                                            placeholder="Enter price" name="price" value="{{ old('price') }}" />
                                        <input type="text" class="form-control mb-2" placeholder="Enter PSA grade"
                                            name="PSAgrade" value="{{ old('PSAgrade') }}" />
                                        <input type="date" class="form-control mb-2" name="launchDate"
                                            value="{{ old('launchDate') }}" />
                                        <select class="form-control mb-2" name="rarity">
                                            <option value="" disabled selected>Select Rarity</option>
                                            <option value="common" {{ old('rarity') == 'common' ? 'selected' : '' }}>Common
                                            </option>
                                            <option value="uncommon" {{ old('rarity') == 'uncommon' ? 'selected' : '' }}>
                                                Uncommon
                                            </option>
                                            <option value="rare" {{ old('rarity') == 'rare' ? 'selected' : '' }}>Rare
                                            </option>
                                            <option value="mythic" {{ old('rarity') == 'mythic' ? 'selected' : '' }}>Mythic
                                            </option>
                                        </select>
                                        <input type="text" class="form-control mb-2" placeholder="Enter pull rate"
                                            name="pullRate" value="{{ old('pullRate') }}" />
                                        <select class="form-control mb-2" name="language">
                                            <option value="" disabled selected>Select Language</option>
                                            <option value="Spanish" {{ old('language') == 'Spanish' ? 'selected' : '' }}>
                                                Spanish
                                            </option>
                                            <option value="English" {{ old('language') == 'English' ? 'selected' : '' }}>
                                                English
                                            </option>
                                            <option value="French" {{ old('language') == 'French' ? 'selected' : '' }}>
                                                French
                                            </option>
                                        </select> <input type="number" class="form-control mb-2" placeholder="Enter stock"
                                            name="stock" value="{{ old('stock') }}" min="0" />
                                        <input type="submit" class="btn btn-primary" value="Send" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
