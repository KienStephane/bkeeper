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

    <div class="py-4">
        <a href="{{ route('clients.create') }}" class="px-4 py-2 bg-green-500 text-white rounded">Ajouter Client</a>
    </div>

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Club</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($clients ?? [] as $client)
            <tr>
                <td>{{ $client->client_nom }}</td>
                <td>{{ $client->client_prenom }}</td>
                <td>{{ $client->client_tel }}</td>
                <td>{{ $client->client_club }}</td>
                <td>{{ $client->client_categorie }}</td>
                <td>
                    <a href="{{ route('clients.edit', $client->client_id) }}" class="text-blue-500">Modifier</a>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="text-center">Aucun client trouvé.</td></tr>
        @endforelse
        </tbody>
    </table>
</x-app-layout>
