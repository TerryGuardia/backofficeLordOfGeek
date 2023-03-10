<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Game details') }} n°{{$jeu->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-6 text-gray-900 text-2xl font-bold">
                    {{ $jeu->titre }}
                </h1>
                <x-etiquette-categorie :route="route('categories.show', $categorie->id)">
                    {{$categorie->libelle}}
                </x-etiquette-categorie>
                @if (count($tags) > 0)
                <div class="flex">
                    @foreach($tags as $tag)
                    <x-etiquette-tag :route="route('tags.show', $tag->id)">{{$tag->nom}}</x-etiquette-tag>
                    @endforeach
                </div>
                @endif
                <p class="w-3/5 mt-8">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe non minima quidem earum inventore atque quasi. Dignissimos voluptatibus delectus quis saepe vero, laudantium facilis. Nihil repellendus pariatur molestiae doloribus totam.</p>
                <div class="flex w-3/5 justify-end mt-5">
                    <x-btn-modifier :action="route('jeux.edit', $jeu->id)">
                        {{ __('Edit') }}
                    </x-btn-modifier>
                    <div class="mx-2"></div>
                    <x-btn-supprimer :action="route('jeux.edit', $jeu->id)">
                        {{ __('Delete') }}
                    </x-btn-supprimer>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>