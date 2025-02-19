<?php

namespace App\Http\Controllers;

use App\Models\TCGCard;
use App\Validators\TCGCardValidator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TCGCardController extends Controller
{
    public function index(): View // PUNTO 4
    {
        $viewData = [];
        $viewData['title'] = 'TCGCards - Market';
        $viewData['subtitle'] = 'List of cards';
        $viewData['tcgCards'] = TCGCard::all();

        return view('tcgCards.index')->with('viewData', $viewData);
    }

    public function show(string $id): View|RedirectResponse // PUNTO 5
    {
        $viewData = [];
        $tcgCard = TCGCard::findOrFail($id);
        $viewData['title'] = $tcgCard['name'].' - Market';
        $viewData['subtitle'] = $tcgCard['name'].' - Card information';
        $viewData['tcgCard'] = $tcgCard;

        return view('tcgCards.show')->with('viewData', $viewData);
    }

    public function delete(string $id): RedirectResponse // PUNTO 6
    {
        $tcgCard = TCGCard::destroy($id);

        return redirect()->route('tcgCards.index');
    }

    public function create(): View
    {
        $viewData = []; // to be sent to the view
        $viewData['title'] = 'Create a new card';

        return view('tcgCards.create')->with('viewData', $viewData);
    }

    public function save(Request $request): View
    {
        $viewData = []; // to be sent to the view
        $viewData['title'] = 'Successful Creation';

        $request->validate(TCGCardValidator::$rules);
        TCGCard::create($request->only(['name', 'description', 'franchise', 'collection', 'price', 'PSAgrade', 'launchDate', 'rarity', 'pullRate', 'language', 'stock']));

        return view('tcgCards.success')->with('viewData', $viewData);
    }
}
