<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des clients
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Liste des clients du site !</h1>
                <p class="text-gray-700">Test listeClient.</p>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('clients.update', $client->client_id) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="client_nom" value="{{ $client->client_nom }}" class="border p-2 w-full">
        <input type="text" name="client_prenom" value="{{ $client->client_prenom }}" class="border p-2 w-full">
        <input type="text" name="client_tel" value="{{ $client->client_tel }}" class="border p-2 w-full">
        <input type="text" name="client_club" value="{{ $client->client_club }}" class="border p-2 w-full">
        <input type="text" name="client_categorie" value="{{ $client->client_categorie }}" class="border p-2 w-full">

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Mettre à jour</button>
    </form>
</x-app-layout>
