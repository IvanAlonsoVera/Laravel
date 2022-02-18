<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form enctype="multipart/form-data" action="{{url('crear')}}" method="post">
                    @csrf
                        <x-label for="nombre">Nombre:</x-label>
                        <x-input type="text" id="nombre" name="nombre"></x-input>
                        <br><br>

                        <x-label for="numR">numRegistro:</x-label>
                        <x-input type="text" id="numR" name="numR" ></x-input>
                        <br><br>

                        <x-label for="desc">Descripcion:</x-label>
                        <x-input type="text" id="desc" name="desc" ></x-input>
                        <br><br>

                        <x-label for="localizacion">localizacion:</x-label>
                        <x-input type="text" id="localizacion" name="localizacion"></x-input>
                        <br><br>

                        <select id="tarea" name="tarea">
                            @foreach ($listaTareas as $tarea)
                             <option value="{{$tarea->id}}">{{$tarea->nombre}}</option>
                            @endforeach
                        </select>

                        <x-button class="px-6 ml-4">
                            {{__('Crear Recurso')}}
                        </x-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>