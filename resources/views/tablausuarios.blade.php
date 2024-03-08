@vite('resources/css/app.css')
@extends('welcome')
@section('titulo')
    Lista Estudiantes
@endsection
@section('titlegeneral', 'Tabla de Usuarios')

@section('additional-content')
@if (session()->has('notificacion'))
    <div id="notificacion" class="text-medium text-green-700 font-bold">
        {{ session('notificacion') }}
    </div>

    <script>
        setTimeout(function(){
            document.getElementById('notificacion').style.display = 'none';
        }, 2000);
    </script>
@endif

<div class="overflow-hidden rounded-lg border border-gray-200 shadow-md m-5">
    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Apellidos</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Matricula</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Cumpleaños</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Comentarios</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            @foreach ($students as $student)
            <tr class="hover:bg-gray-50">
                <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                    <div class="relative h-10 w-10">
                        <img class="h-full w-full rounded-full object-cover object-center mt-2"
                        src="{{ asset('img/hacker.png') }}"
                        alt="" />
                        <span
                            class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                    </div>
                        <div class="font-medium mt-3 text-gray-700">{{ $student->name_student }}</div>
                </th>
                <td class="px-6 py-4">{{ $student->lastname_student }}</td>
                <td class="px-6 py-4">{{ $student->id_student }}</td>
                <td class="px-6 py-4">{{ $student->birthday }}</td>
                <td class="px-6 py-4">{{ $student->comments }}</td>
                <td class="space-x-2 text-center">
                    <a href="{{route('students.show', $student-> id)}}" class="font-bold text-blue-700">Detalles</a>
                    <a href="{{route('students.edit', $student-> id)}}" class="font-bold text-red-700">Editar</a>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$students ->links()}}
</div>
@endsection