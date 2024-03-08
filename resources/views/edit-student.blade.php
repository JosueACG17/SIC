@vite('resources/css/app.css')
@extends('welcome')
@section('titulo')
   Editar Usuario
@endsection

@section('titlegeneral', 'Editar Usuario')

@section('additional-content')
@vite('resources/css/app.css')

<form action="{{route('students.update', $student->id)}}" method="POST">
@csrf
@method('put')
<h1 class="text-center mt-10 text-4xl ">EDITAR USUARIO</h1>
<div>
    <label for="name" class="block mb-2 text-medium font-semibold text-white">Nombre(s)</label>
    <input name="name_student" placeholder="Escribe tu nombre" class="block w-full px-4 py-2 mt-2 text-black placeholder-gray-600 bg-white border border-gray-200 rounded-lg focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 " value="{{$student->name_student}}" />
</div>
<div class="text-red-400 font-bold text-lg">
    @error('nombre')
        {{ $message }}
    @enderror
</div>
<div class="mt-8">
    <button type="submit" class="w-full text-xl p-2  rounded-xl tracking-wide text-white transition-colors duration-300 transform bg-emerald-500 hover:bg-indigo-600 focus:outline-none focus:bg-blue-600 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
        Editar
    </button>
</div>
</form>
@endsection
