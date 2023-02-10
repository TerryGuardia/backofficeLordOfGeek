<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Categorie') }} n°{{$categorie->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 w-3/5">
                    <form action="{{route('categories.update', $categorie->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-gray-800 font-bold mb-2" for="libelle">
                                {{ __('Wording') }}
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="libelle" type="text" name="libelle" value="{{ old('libelle', $categorie->libelle) }}" required>
                            @error('libelle')
                        <div class="text-red-500">{{$message}}</div>
                        @enderror
                        </div>

                        <x-btn-sauvegarder></x-btn-sauvegarder>
                        <x-btn-annuler></x-btn-annuler>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>