<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // 1. Liste des clients
    public function index()
    {
        $clients = Client::all();
        return view('client.listeClient', compact('clients'));
    }

    // 2. Formulaire ajout client
    public function create()
    {
        return view('client.ajouterClient');
    }

    // 2b. Enregistrer un client
    public function store(Request $request)
    {
        $request->validate([
            'client_nom' => 'required|max:50',
            'client_prenom' => 'required|max:50',
            'client_tel' => 'required|numeric',
            'client_club' => 'required|max:50',
            'client_categorie' => 'required|max:20',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Client ajouté avec succès !');
    }

    // 3. Formulaire modifier un client
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('client.modifierClient', compact('client'));
    }

    // 3b. Mettre à jour un client
    public function update(Request $request, $id)
    {
        $request->validate([
            'client_nom' => 'required|max:50',
            'client_prenom' => 'required|max:50',
            'client_tel' => 'required|numeric',
            'client_club' => 'required|max:50',
            'client_categorie' => 'required|max:20',
        ]);

        $client = Client::findOrFail($id);
        $client->update($request->all());

        return redirect()->route('clients.index')->with('success', 'Client modifié avec succès !');
    }
}
