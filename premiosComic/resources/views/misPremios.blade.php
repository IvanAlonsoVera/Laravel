<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis Premios') }}
        </h2>
    </x-slot>

       @foreach ($listaPremios as $prem)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="max-w-sm rounded overflow-hidden shadow-lg">
                          <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $prem->anio }}</div>
                            <p class="text-gray-500 text-base">{{ $prem->comic }}</p>
                            <p class="text-gray-700 text-base">{{ $prem->autor }}</p>
                          </div>
                          <div class="px-6 pt-4 pb-2">
                            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $prem->User->name }}</span>
                          </div>
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>