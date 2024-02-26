@vite('resources/css/app.css')
@extends('plantilla')
@section('titulo')
    Agregar Estudiante
@endsection
@section('contenido')
<body>
    <section class="min-h-screen flex items-stretch text-white ">
        <div class="lg:flex w-full bg-white md:bg-white bg-no-repeat bg-cover relative items-center"
            style="background-image: url(http://www.utcancun.edu.mx/wp-content/uploads/2016/07/e75f02ac-c4da-4162-a1a7-5e8ef604e830.jpg);">
            <div class="absolute bg-black opacity-50 inset-0 z-0"></div>
            <div class="w-full px-24 z-10">
                <h1 class="text-5xl font-bold text-center tracking-wide">Sistema Integral de Calificaciones</h1>
            </div>
            <div class="w-full py-6 z-30">
                <div class="mx-auto max-w-lg rounded-lg">
                    <form action="{{ url('/home') }}" method="POST" class="mt-4 space-y-4 bg-white md:bg-white rounded-lg p-4 shadow-lg sm:p-6 lg:p-6 ">
                        @csrf
                        <p class="text-center text-3xl text-black md:text-black font-bold" >Registro</p>
                        <div>
                            <div class="flex">
                                <img src="https://cdn-icons-png.flaticon.com/128/6135/6135324.png" class="h-8 w-8 mt-2 mr-2"/>
                                <input type="text"
                                    class="w-full text-black placeholder-gray-600 focus:border-green-600  focus:ring-green-600 focus:outline-none focus:ring focus:ring-opacity-40  rounded-lg border-gray-200 p-4 pe-12 text-medium  shadow-sm"
                                    placeholder="Ingresa tu Nombre" name="nombre" value="{{ old('nombre') }}"/>
                            </div>
                        </div>
                        <div class="text-red-400 font-bold text-lg">
                            @error('nombre')
                                {{ $message }}
                            @enderror
                        </div>
                        <div>
                            <div class="flex">
                                <img src="https://cdn-icons-png.flaticon.com/128/3037/3037914.png" class="h-8 w-8 mt-2 mr-2 "/>
                                <input type="text"
                                    class="w-full text-black placeholder-gray-600 focus:border-green-600  focus:ring-green-600 focus:outline-none focus:ring focus:ring-opacity-40  rounded-lg border-gray-200 p-4 pe-12 text-medium  shadow-sm"
                                    placeholder="Ingresa tu Matricula" name="matricula" value="{{ old('matricula') }}"/>
                            </div>
                        </div>
                        <div class="text-red-400 font-bold text-lg">
                            @error('matricula')
                                {{ $message }}
                            @enderror
                        </div>
                        <div>
                            <div class="flex">
                                <img src="https://cdn-icons-png.flaticon.com/128/14782/14782211.png" class="h-8 w-8 mt-2 mr-2"/>
                                <input type="email"
                                    class="w-full text-black placeholder-gray-600 focus:border-green-600  focus:ring-green-600 focus:outline-none focus:ring focus:ring-opacity-40  rounded-lg border-gray-200 p-4 pe-12 text-medium  shadow-sm"
                                    placeholder="Ingresa tu correo" name="correo" value="{{ old('correo') }}" />
                            </div>
                        </div>
                        <div class="text-red-400 font-bold text-lg">
                            @error('correo')
                                {{ $message }}
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="sr-only">Password</label>

                            <div class="flex">
                                <img src="https://cdn-icons-png.flaticon.com/128/9705/9705732.png" class="h-8 w-8 mt-2 mr-2 "/>
                                <input type="password"
                                    class="w-full text-black placeholder-gray-600 focus:border-green-600  focus:ring-green-600 focus:outline-none focus:ring focus:ring-opacity-40 rounded-lg  p-4 pe-12 text-medium shadow-sm"
                                    placeholder="Ingresa tu contraseña" name="contraseña" value="{{ old('contraseña') }}"/>
                            </div>
                        </div>
                        <div class="text-red-400 font-bold text-lg">
                            @error('contraseña')
                                {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="w-full text-xl p-1.5  rounded-xl tracking-wide text-white transition-colors duration-300 transform bg-emerald-600 hover:bg-indigo-600 focus:outline-none focus:bg-blue-600 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                            Registrate
                        </button>
                    </form>
                </div>
    </section>
</body>

@endsection
