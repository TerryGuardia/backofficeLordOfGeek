@props(['action'])

@if (isset($action))
<a href="{{ $action }}" class="px-4 py-3 bg-gray-200 text-gray rounded hover:bg-gray-100 my-auto">
    {{ $slot }}
</a>
@endif