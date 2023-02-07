@props(['jeu'])
@props(['categorie'])
@props(['tag'])

@if (isset($jeu))
<a href="{{ route('jeux.edit', $jeu->id) }}" class="p-3 bg-blue-500 text-white rounded hover:bg-blue-400">
    {{ $slot }}
</a>
@endif

@if (isset($categorie))
<a href="{{ route('categories.edit', $categorie->id) }}" class="p-3 bg-blue-500 text-white rounded hover:bg-blue-400">
    {{ $slot }}
</a>
@endif

@if (isset($tag))
<a href="{{ route('tags.edit', $tag->id) }}" class="p-3 bg-blue-500 text-white rounded hover:bg-blue-400">
    {{ $slot }}
</a>
@endif