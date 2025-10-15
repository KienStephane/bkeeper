<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter un gant
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-4">Ajouter un gant sur le site !</h1>
                <p class="text-gray-700">Test ajouterGant.</p>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ route('gants.store') }}" class="space-y-4">
        @csrf
        <input type="text" name="gant_nom" placeholder="Nom" class="border p-2 w-full">
        <input type="text" name="gant_taille" placeholder="Taille du gant" class="border p-2 w-full">
        <input type="number" name="gant_prix_client" placeholder="Prix client du gant" class="border p-2 w-full" step="0.01" min="0" max="999.99">
        <input type="number" name="gant_prix_revendeur" placeholder="Prix revendeur du gant" class="border p-2 w-full" step="0.01" min="0" max="999.99">

        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Enregistrer</button>
    </form>
</x-app-layout>
