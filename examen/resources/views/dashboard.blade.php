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
                    <table>
                        <thead>
                            <tr>   
                                <th>Nombre</th><th>Descripcion</th><th>Responsable</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listaTareas as $tarea)
                                <tr>
                                    <td>{{$tarea->nombre}}</td>
                                    <td>{{$tarea->descripcion}}</td>
                                    <td>{{$tarea->responsable}}</td>
                                    <td><a href="{{url('borrar').'/'.$tarea->id}}">Borrar</a></td>
                                    <td><a href="{{url('modificar').'/'.$tarea->id}}">Modificar</a>
                                    <a href="{{url('listaRecursos/'.$tarea->id)}}">Listar Recursos</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
