<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Tag') }} n°{{$tag->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 w-3/5">
                    <form action="{{route('tags.update', $tag->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block text-gray-800 font-bold mb-2" for="nom">
                                {{ __('Tag') }}
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nom" type="text" name="nom" value="{{ old('nom', $tag->nom) }}" required>
                            @error('nom')
                        <div class="text-red-500">{{$message}}</div>
                        @enderror
                        </div>

                        <button type="submit" class="bg-blue-500 p-3 text-white font-bold rounded hover:bg-blue-400 mr-5">
                            {{ __('Save') }}
                        </button>
                        <button type="reset" class="p-3 text-gray font-bold bg-gray-200 text-gray rounded hover:bg-gray-100">
                            {{ __('Cancel') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>