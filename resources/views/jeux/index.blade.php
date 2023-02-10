<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Games') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-5">{{__('List of all games')}}</h1>
                    @if (count($jeux) > 0)
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Titre</th>
                                <th class="border px-4 py-2">Actions</th>
                                <th>
                                    <x-btn-creer :action="route('jeux.create')">
                                        {{ __('Create') }}
                                    </x-btn-creer>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jeux as $jeu)
                            <tr>
                                <td class="border text-center px-4 py-2">{{ $jeu->id }}</td>
                                <td class="border px-4 py-2">{{ $jeu->titre }}</td>
                                <td class="border px-4 py-2 flex justify-evenly">
                                    <x-btn-modifier :action="route('jeux.edit', $jeu->id)">
                                        {{ __('Edit') }}
                                    </x-btn-modifier>
                                    <x-btn-voir :action="route('jeux.show', $jeu->id)">
                                        {{ __('Vue') }}
                                    </x-btn-voir>
                                    <x-btn-supprimer :action="route('jeux.destroy', $jeu->id)">
                                        {{ __('Delete') }}
                                    </x-btn-supprimer>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @else
                    Je n'ai pas de jeux.
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>