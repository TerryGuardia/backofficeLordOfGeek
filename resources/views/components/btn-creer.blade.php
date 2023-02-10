@props(['action'])

@if (isset($action))
<a href="{{ $action }}" class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-400">
    {{ $slot }}
</a>
@endif