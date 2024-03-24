<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors class="mb-4" />

                    <form method="POST" action="{{ route('projects.store') }}">
                        @csrf

                        <div>
                            <x-label for="name" :value="__('Name')"/>
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                        </div>

                        <div class="flex mt-4">
                            <x-button>
                                {{ __('Save Project') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>