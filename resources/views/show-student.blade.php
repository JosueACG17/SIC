@vite('resources/css/app.css')
@extends('welcome')
@section('titulo')
    Apartado usuarios
@endsection

@section('titlegeneral', 'Mostrar datos del usuarios')

@section('additional-content')

    <section class="bg-white dark:bg-gray-900 h-full justify-center ">
        <div class="container px-6 py-10 mx-auto">
            <div class="lg:-mx-6 lg:flex lg:items-center">
                <img class="object-cover object-center lg:w-1/2 lg:mx-6 w-full h-96 rounded-lg lg:h-[24rem]"
                src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="">

                <div class="mt-8 lg:w-1/2 lg:px-6 lg:mt-0">

                    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white lg:text-3xl text-center">
                        {{ $student->name_student }}
                    </h1>
                    <h3 class="text-lg text-center font-medium text-blue-500">
                        {{ $student->lastname_student }}
                    </h3>
                    <p class="max-w-lg mt-6 text-white  ">
                        {{ $student->comments }}

                    </p>
                    <div class="flex mt-10">
                        <h1 class=" text-2xl  text-white font-bold mr-4 ">Matricula:</h1>
                        <p class="text-2xl text-red-700 font-bold">
                            {{ $student->id_student }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
