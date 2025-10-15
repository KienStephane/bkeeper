<?php

namespace App\Http\Controllers;

use App\Models\Gant;
use Illuminate\Http\Request;

class GantController extends Controller
{
    // 1. Liste des gants
    public function index()
    {
        $gants = Gant::all();
        return view('gant.listeGant', compact('gants'));
    }

    // 2. Formulaire ajout gant
    public function create()
    {
        return view('gant.ajouterGant');
    }

    // 2b. Enregistrer un gant
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gant_nom' => 'required|max:50',
            'gant_taille' => 'required|numeric',
            'gant_prix_client' => ['required', 'regex:/^\d{1,3}(\.\d{1,2})?$/'],
            'gant_prix_revendeur' => ['required', 'regex:/^\d{1,3}(\.\d{1,2})?$/'],
        ]);

        // Convertir les virgules en points
        $validated['gant_prix_client'] = str_replace(',', '.', $validated['gant_prix_client']);
        $validated['gant_prix_revendeur'] = str_replace(',', '.', $validated['gant_prix_revendeur']);

        Gant::create($validated);

        return redirect()->route('gants.index')->with('success', 'Gant ajouté avec succès !');
    }

    // 3. Formulaire modifier un client
    public function edit($id)
    {
        $gant = Gant::findOrFail($id);
        return view('gant.modifierGant', compact('gant'));
    }

    // 3b. Mettre à jour un client
    public function update(Request $request, $id)
    {
        $request->validate([
            'gant_nom' => 'required|max:50',
            'gant_taille' => 'required|integer|min:0|max:99',
            'gant_prix_client' => ['required', 'regex:/^\d{1,3}(\.\d{1,2})?$/'],
            'gant_prix_revendeur' => ['required', 'regex:/^\d{1,3}(\.\d{1,2})?$/'],
        ]);

        $gant = Gant::findOrFail($id);
        $gant->update($request->all());

        return redirect()->route('gants.index')->with('success', 'Gant modifié avec succès !');
    }
}
