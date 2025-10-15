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

    <div class="py-4">
        <a href="{{ route('gants.create') }}" class="px-4 py-2 bg-green-500 text-white rounded">Ajouter Gant</a>
    </div>

    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Taille</th>
                <th>Prix client</th>
                <th>Prix revendeur</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($gants ?? [] as $gant)
            <tr>
                <td>{{ $gant->gant_nom }}</td>
                <td>{{ $gant->gant_taille }}</td>
                <td>{{ $gant->gant_prix_client }}</td>
                <td>{{ $gant->gant_prix_revendeur }}</td>
                <td>
                    <a href="{{ route('gants.edit', $gant->gant_id) }}" class="text-blue-500">Modifier</a>
                </td>
            </tr>
        @empty
            <tr><td colspan="6" class="text-center">Aucun gant trouvé.</td></tr>
        @endforelse
        </tbody>
    </table>
</x-app-layout>
