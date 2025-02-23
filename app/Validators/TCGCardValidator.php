<?php

namespace App\Validators;

class TCGCardValidator
{
    public static $rules = [
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'franchise' => 'required|string|max:255',
        'collection' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'PSAgrade' => 'nullable|string|max:10',
        'launchDate' => 'required|date',
        'rarity' => 'required|in:common,uncommon,rare,mythic',
        'pullRate' => 'nullable|string|max:255',
        'language' => 'required|in:Spanish,English,French',
        'stock' => 'required|integer|min:0',
    ];
}
