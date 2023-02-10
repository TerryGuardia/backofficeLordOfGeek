<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags details') }} n°{{$tag->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-6 text-gray-900 text-2xl font-bold">
                    {{ $tag->nom }}
                </h1>
                @if (count($jeux) > 0)
                <ul>Liste des jeux avec ce tag
                    @foreach($jeux as $jeu)
                    <li class="ml-2 mt-2">
                        <a href="{{route('jeux.show', $jeu->id)}}">{{$jeu->titre}}</a>
                    </li>
                    @endforeach
                </ul>
                @else
                Aucun jeu a ce tag.
                @endif
                <div class="flex w-3/5 justify-end mt-5">
                    <x-btn-modifier :action="route('tags.edit', $tag->id)">
                        {{ __('Edit') }}
                    </x-btn-modifier>
                    <div class="mx-2"></div>
                    <x-btn-supprimer :action="route('tags.edit', $tag->id)">
                        {{ __('Delete') }}
                    </x-btn-supprimer>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>