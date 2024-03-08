@vite('resources/css/app.css')
@extends('plantilla')
@section('titulo')
    Agregar Estudiante
@endsection
@section('contenido')
    <form action="{{ url('/students') }}" method="POST" >
        @csrf
        <div class="bg-green-800">
            <div class="flex justify-center h-screen">
                <div class="hidden bg-cover lg:block lg:w-3/5 " style="background-image: url(https://images.pexels.com/photos/3183183/pexels-photo-3183183.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1)">
                    <div class="flex items-center h-full px-20 bg-green-900 bg-opacity-30">
                        <div>
                            <h2 class="text-2xl font-bold text-white sm:text-5xl">SISTEMA INTEGRAL DE CALIFICACIONES</h2>
                        </div>
                    </div>
                </div>
        
                <div class="flex items-center w-full max-w-md px-12 mt-20 mx-auto lg:w-2/6">
                    <div class="flex-1">
                        
        
                        <div class="">
                            <form>
                                <div>
                                    <label for="name" class="block mb-2 text-medium font-semibold text-white">Nombre(s)</label>
                                    <input name="nombre" placeholder="Escribe tu nombre" class="block w-full px-4 py-2 mt-2 text-black placeholder-gray-600 bg-white border border-gray-200 rounded-lg focus:border-blue-400 focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 " value="{{ old('nombre') }}" />
                                </div>
                                <div class="text-red-400 font-bold text-lg">
                                    @error('nombre')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label for="matricula" class="block mb-2 text-medium font-semibold text-white">Apellidos</label>
                                    <input name="apellidos" type="text" placeholder="Escribe tu matricula"  class="block w-full px-4 py-2 mt-2 text-black placeholder-gray-600 bg-white border border-gray-200 rounded-lg focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 " value="{{ old('apellidos') }}" />
                                </div>
                                <div class="text-red-400 font-bold text-lg">
                                    @error('apellidos')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label for="matricula" class="block mb-2 text-medium font-semibold text-white">Matricula</label>
                                    <input name="matricula" type="text" placeholder="Escribe tu matricula"  class="block w-full px-4 py-2 mt-2 text-black placeholder-gray-600 bg-white border border-gray-200 rounded-lg focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 " value="{{ old('matricula') }}" />
                                </div>
                                <div class="text-red-400 font-bold text-lg">
                                    @error('matricula')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label for="matricula" class="block mb-2 text-medium font-semibold text-white">Cumpleaños</label>
                                    <input name="cumpleanios" type="text" placeholder="Escribe tu matricula"  class="block w-full px-4 py-2 mt-2 text-black placeholder-gray-600 bg-white border border-gray-200 rounded-lg focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 " value="{{ old('cumpleanios') }}" />
                                </div>
                                <div class="text-red-400 font-bold text-lg">
                                    @error('cumpleanios')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label for="matricula" class="block mb-2 text-medium font-semibold text-white">Correo Electronico</label>
                                    <input name="correo" type="email" placeholder="Escribe tu matricula"  class="block w-full px-4 py-2 mt-2 text-black placeholder-gray-600 bg-white border border-gray-200 rounded-lg focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 " value="{{ old('correo') }}" />
                                </div>
                                <div class="text-red-400 font-bold text-lg">
                                    @error('correo')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-2">
                                    <label for="matricula" class="block mb-2 text-medium font-semibold text-white">Contraseña</label>
                                    <input name="contraseña" type="password" placeholder="Escribe tu contraseña" class="block w-full px-4 py-2 mt-2 text-black placeholder-gray-600 bg-white border border-gray-200 rounded-lg focus:border-blue-400  focus:ring-blue-400 focus:outline-none focus:ring focus:ring-opacity-40 " value="{{ old('contraseña') }}" />

                                </div>
                                <div class="text-red-400 font-bold text-lg">
                                    @error('contraseña')
                                        {{ $message }}
                                    @enderror
                                </div>
                                <div class="mt-8">
                                    <button class="w-full text-xl p-2  rounded-xl tracking-wide text-white transition-colors duration-300 transform bg-emerald-500 hover:bg-indigo-600 focus:outline-none focus:bg-blue-600 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                                        Registrate
                                    </button>
                                </div>
        
                            </form>
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
