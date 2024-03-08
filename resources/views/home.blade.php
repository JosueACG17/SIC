@extends('welcome')
@section('titlegeneral')
Datos Generales
@endsection

@section('additional-content')
<div class="px-6 pt-6 2xl:container">
    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <div class="md:col-span-2 lg:col-span-1">
            <div>
                <div
                    class="h-full py-6 px-6 rounded-xl border-2 text-center border-gray-200 bg-white hover:bg-green-400 flex flex-col justify-center items-center">
                    <h5 class="text-3xl font-bold text-gray-700">Maestros</h5>
                    <img class="h-28 w-28 mt-4"
                        src="https://cdn-icons-png.flaticon.com/128/3253/3253367.png"
                        alt="Icono de maestro">
                    <div class="my-8">
                        <h1 class="text-5xl font-bold text-gray-800">30</h1>
                    </div>
                </div>

            </div>
        </div>
        <div>
            <a href="tablausuarios"
                class="h-full py-6 px-6 rounded-xl border-2 text-center border-gray-200 bg-white hover:bg-green-400 flex flex-col justify-center items-center">
                <h5 class="text-3xl font-bold text-gray-700">Estudiantes</h5>
                <img class="h-28 w-28 mt-4"
                    src="https://cdn-icons-png.flaticon.com/128/2995/2995459.png"
                    alt="Icono de maestro">
                <div class="my-8">
                    <h1 class="text-5xl font-bold text-gray-800">120</h1>
                </div>
            </a>

        </div>
        <div>
            <div
                class="h-full py-6 px-6 rounded-xl border-2 text-center border-gray-200 bg-white hover:bg-green-400 flex flex-col justify-center items-center">
                <h5 class="text-3xl font-bold text-gray-700">Asignaturas</h5>
                <img class="h-28 w-28 mt-4"
                    src="https://cdn-icons-png.flaticon.com/128/10782/10782050.png"
                    alt="Icono de maestro">
                <div class="my-8">
                    <h1 class="text-5xl font-bold text-gray-800">10</h1>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
