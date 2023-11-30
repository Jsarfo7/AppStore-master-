<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Moderator Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as moderator!") }}
                    {{ __("You may moderate comments!") }}
                    <br>
                    <button type="submit" class="action-button bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">View Comments</button>
            </div>
        </div>
        
    </div>
</x-app-layout>