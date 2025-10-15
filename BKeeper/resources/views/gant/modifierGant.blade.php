<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des gants
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Liste des gants du site !</h1>
                <p class="text-gray-700">Test listeGant.</p>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('gants.update', $gant->gant_id) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <input type="text" name="gant_nom" value="{{ $gant->gant_nom }}" class="border p-2 w-full">
        <input type="text" name="gant_taille" value="{{ $gant->gant_taille }}" class="border p-2 w-full">
        <input type="number" name="gant_prix_client" value="{{ $gant->gant_prix_client }}" class="border p-2 w-full" step="0.01" min="0" max="999.99">
        <input type="number" name="gant_prix_revendeur" value="{{ $gant->gant_prix_revendeur }}" class="border p-2 w-full" step="0.01" min="0" max="999.99">

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Mettre à jour</button>
    </form>
</x-app-layout>
