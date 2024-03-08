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
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('login') }}"
                            class="mt-4 space-y-4 bg-white md:bg-white rounded-lg p-4 shadow-lg sm:p-6 lg:p-6 ">
                            @csrf

                            <p class="text-center text-3xl text-black md:text-black font-bold">Iniciar Sesión</p>

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full text-black" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full text-black" type="password"
                                    name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a href="/registro"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    No tienes cuenta? Registrate
                                </a>

                                <x-primary-button class="ml-3">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
        </section>
    </body>
@endsection
