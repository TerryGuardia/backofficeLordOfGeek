@props(['jeu'])
@props(['categorie'])
@props(['tag'])

@if (isset($jeu))
<form action="{{ route('jeux.destroy', $jeu->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-3 bg-red-500 text-white rounded hover:bg-red-400">
        {{ $slot }}
    </button>
</form>
@endif

@if (isset($categorie))
<form action="{{ route('categories.destroy', $categorie->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-3 bg-red-500 text-white rounded hover:bg-red-400">
        {{ $slot }}
    </button>
</form>
@endif

@if (isset($tag))
<form action="{{ route('tags.destroy', $tag->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-3 bg-red-500 text-white rounded hover:bg-red-400">
        {{ $slot }}
    </button>
</form>
@endif