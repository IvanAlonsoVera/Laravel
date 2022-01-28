<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un equipo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ url('guardarEquipo') }}" method="get">
                        <x-label for="nombre">Nombre:</x-label>
                        <x-input type="text" id="nombre" name="nombre"></x-input>
                        <br><br>

                        <x-label for="puntos">Puntos:</x-label>
                        <x-input type="text" id="puntos" name="puntos"></x-input>
                        <br><br>

                        <x-label for="golesfavor">Goles a favor:</x-label>
                        <x-input type="text" id="gf" name="golesFavor"></x-input>
                        <br><br>

                        <x-label for="golesContra">Goles en contra:</x-label>
                        <x-input type="text" id="gc" name="golesContra"></x-input>
                        <br><br>

                        <x-button>{{ __('Registrar')}}</x-button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>