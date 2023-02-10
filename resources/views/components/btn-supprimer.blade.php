@props(['action'])

@if (isset($action))
<form action="{{ $action }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="p-3 bg-red-500 text-white rounded hover:bg-red-400">
        {{ $slot }}
    </button>
</form>
@endif