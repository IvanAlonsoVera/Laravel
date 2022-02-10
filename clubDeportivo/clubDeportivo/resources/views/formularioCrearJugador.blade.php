<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear un Jugador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form enctype="multipart/form-data" action="{{ url('crearEquipo') }}" method="post">
                    @csrf
                        <x-label for="nombre">Nombre del Jugador:</x-label>
                        <x-input type="text" id="nombre" name="nombre"></x-input>
                        <br><br>

                        <x-label for="edad">Entrenador:</x-label>
                        <x-input type="text" id="edad" name="edad"></x-input>
                        <br><br>

                        <x-label for="equipo">Equipo::</x-label>
                        <select name="equipo_id" value="-1" >
                            @foreach ($leq as $equipo)
                                <option value="{{$equipo->id}}">{{$equipo->id}}</option>
                            @endforeach
                        </select>
                        <br><br>

                        <x-button>{{ __('Crear Equipo')}}</x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>