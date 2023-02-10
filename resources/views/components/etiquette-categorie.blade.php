@props(['route'])

@if (isset($route))
<a href="{{ $route }}" class="px-4 py-3 m-2 bg-green-200 text-gray rounded hover:bg-green-100">
    {{ $slot }}
</a>
@endif