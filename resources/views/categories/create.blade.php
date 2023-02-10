<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add a new categorie') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 w-3/5">
                    <form action="{{route('categories.store')}}" method="post">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="libelle">
                                {{ __('Wording') }}
                            </label>
                            <input type="text" name="libelle" id="libelle" class="border p-2 w-full" required>
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