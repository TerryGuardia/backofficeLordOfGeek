<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-5">{{__('List of all categories')}}</h1>
                    @if (count($categories) > 0)
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Libelle</th>
                                <th class="border px-4 py-2">Actions</th>
                                <th><a href="{{ route('categories.create') }}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-400">{{ __('Create') }}</a>
                                </th></tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $categorie)
                            <tr>
                                <td class="border text-center px-4 py-2">{{ $categorie->id }}</td>
                                <td class="border px-4 py-2">{{ $categorie->libelle }}</td>
                                <td class="border px-4 py-2 flex justify-evenly">
                                    <x-btn-modifier :categorie="$categorie">
                                        {{ __('Edit') }}
                                    </x-btn-modifier>
                                    <a href="{{ route('categories.show', $categorie->id) }}" class="px-4 py-3 bg-gray-200 text-gray rounded hover:bg-gray-100 my-auto">Voir</a>
                                    <x-btn-supprimer :categorie="$categorie">
                                        {{ __('Delete') }}
                                    </x-btn-supprimer>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @else
                    Je n'ai pas de catégories.
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>