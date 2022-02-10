<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                       @foreach($le as $equipo)
                        <li><a href="{{url ('listadoJugadores/'.$equipo->id)}}">{{$equipo->nombre}}</a>
                            <a href="{{url ('modificarEquipo/'.$equipo->id)}}">Modificar</a>
                            <a href="{{url ('borrarEquipo/'.$equipo->id)}}">Borrar</a>
                        </li><br>
                        @endforeach 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
