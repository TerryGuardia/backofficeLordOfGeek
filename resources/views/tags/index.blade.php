<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-5">{{__('List of all tags')}}</h1>
                    @if (count($tags) > 0)
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Nom</th>
                                <th class="border px-4 py-2">Actions</th>
                                <th>
                                <x-btn-creer :action="route('tags.create')">
                                        {{ __('Create') }}
                                    </x-btn-creer>
                                </th></tr>
                        </thead>
                        <tbody>
                            @foreach($tags as $tag)
                            <tr>
                                <td class="border text-center px-4 py-2">{{ $tag->id }}</td>
                                <td class="border px-4 py-2">{{ $tag->nom }}</td>
                                <td class="border px-4 py-2 flex justify-evenly">
                                    <x-btn-modifier :action="route('tags.edit', $tag->id)">
                                        {{ __('Edit') }}
                                    </x-btn-modifier>
                                    <x-btn-voir :action="route('tags.show', $tag->id)">
                                        {{ __('Vue') }}
                                    </x-btn-voir>
                                    <x-btn-supprimer :action="route('tags.destroy', $tag->id)">
                                        {{ __('Delete') }}
                                    </x-btn-supprimer>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @else
                    Je n'ai pas de tags.
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>