<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Game') }} n°{{$jeu->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 w-3/5">
                    <form action="{{route('jeux.update', $jeu->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-gray-800 font-bold mb-2" for="titre">
                                {{ __('Title') }}
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titre" type="text" name="titre" value="{{ old('titre', $jeu->titre) }}" required>
                            @error('titre')
                            <div class="text-red-500">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="flex mb-12">
                            <label class="block text-gray-800 font-bold mb-2" for="categorie">{{ __('Category') }}</label>
                            <select class=" w-2/5 shadow appearance-none border rounded ml-5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="categorie" name="categorie_id" required>
                                @foreach($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{$categorie->libelle}}</option>
                                @endforeach
                            </select>
                            @error('categorie_id')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <x-btn-sauvegarder></x-btn-sauvegarder>
                        <x-btn-annuler></x-btn-annuler>
                    </form>
                    <div>
                            <div class="my-4 flex">
                                @if (count($tags) > 0)
                                @foreach($tags as $tag)
                                <x-etiquette-tag :route="route('jeux.detach', [$jeu->id, $tag->id] )">{{$tag->nom}}</x-etiquette-tag>
                                @endforeach
                                @endif
                            </div>
                        </div>
                    <form action="{{ route('jeux.attach', $jeu->id) }}" method="post">
                                @csrf
                                <div class="flex align-middle mb-5 mt-8">
                                <label class="block text-gray-800 font-bold mb-2 mx-2" for="nom">
                                    Nouveau Tag
                                </label>
                                <input class="shadow appearance-none border rounded w-2/5 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" type="text" name="nom" required>
                                <x-btn-add></x-btn-add>
                                </div>
                                @error('titre')
                                <div class="text-red-500 mb-5">{{$message}}</div>
                                @enderror
                            </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>