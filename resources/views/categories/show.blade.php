<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categorie details') }} n°{{$categorie->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-6 text-gray-900 text-2xl font-bold">
                    {{ $categorie->libelle }}
                </h1>
                <p class="w-3/5">Liste de tous les jeux de cette catégorie</p>
                <div class="flex w-3/5 justify-end mt-5">
                    <x-btn-modifier :categorie="$categorie">
                        {{ __('Edit') }}
                    </x-btn-modifier>
                    <div class="mx-2"></div>
                    <x-btn-supprimer :categorie="$categorie">
                        {{ __('Delete') }}
                    </x-btn-supprimer>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>