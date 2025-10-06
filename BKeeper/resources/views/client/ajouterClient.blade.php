<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter un client
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Ajouter un client sur le site !</h1>
                <p class="text-gray-700">Test ajouterClient.</p>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('clients.store') }}" class="space-y-4">
        @csrf
        <input type="text" name="client_nom" placeholder="Nom" class="border p-2 w-full">
        <input type="text" name="client_prenom" placeholder="Prénom" class="border p-2 w-full">
        <input type="text" name="client_tel" placeholder="Téléphone" class="border p-2 w-full">
        <input type="text" name="client_club" placeholder="Club" class="border p-2 w-full">
        <input type="text" name="client_categorie" placeholder="Catégorie" class="border p-2 w-full">

        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Enregistrer</button>
    </form>
</x-app-layout>
