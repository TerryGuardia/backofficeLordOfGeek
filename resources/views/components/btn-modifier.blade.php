@props(['action'])

@if (isset($action))
<a href="{{ $action }}" class="p-3 bg-blue-500 text-white rounded hover:bg-blue-400">
    {{ $slot }}
</a>
@endif