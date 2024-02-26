<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite('resources/css/app.css')
    
</head>

<body>
    <main>
    <div class="flex flex-row min-h-screen bg-gray-100 text-gray-800">
        <aside
            class="sidebar w-64 md:shadow transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-green-900">
            <div class="sidebar-header flex items-center justify-center py-4">
                <div class="inline-flex">
                    <p class="inline-flex flex-row items-center">
                        <img src="https://cdn-icons-png.freepik.com/256/2098/2098402.png?ga=GA1.1.295903305.1708038180&semt=ais"
                            class="h-10 w-10"></img>
                        <span class="leading-10 text-gray-100 text-2xl font-bold ml-1 uppercase">Sic</span>
                    </a>
                </div>
            </div>
            <div class="sidebar-content px-4 py-6">
                <ul class="flex flex-col w-full">
                    <li class="mt-2">
                        <a href="/dashboard"
                            class="flex flex-row items-center h-10 px-3 rounded-lg font-semibold text-black hover:text-white bg-gray-100 hover:bg-emerald-600">
                            <span class="flex items-center justify-center text-lg text-black">
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path
                                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                            </span>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li class="mt-4">
                        <span class="flex font-semibold text-sm text-white px-4 my-4 uppercase">Concentrado</span>
                    </li>
                    <li class="my-px">
                        <a href="#"
                            class="flex flex-row items-center h-10 px-3 rounded-lg font-semibold text-white hover:bg-green-400 hover:text-black">
                            <span class="flex items-center justify-center text-lg text-white">
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path
                                        d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                </svg>
                            </span>
                            <span class="ml-3">Calificaciones</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                            class="flex flex-row items-center h-10 px-3 rounded-lg font-semibold text-white hover:bg-green-400 hover:text-black">
                            <span class="flex items-center justify-center text-lg text-white">
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </span>
                            <span class="ml-3">Actividades</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="estudiantes"
                            class="flex flex-row items-center h-10 px-3 rounded-lg font-semibold text-white hover:bg-green-400 hover:text-black">
                            <span class="flex items-center justify-center text-lg text-white">
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </span>
                            <span class="ml-3">Estudiantes</span>
                            
                        </a>
                    </li>
                    <li class="mt-6">
                        <span class="flex font-semibold text-sm text-white px-4 my-4 uppercase">Cuenta</span>
                    </li>
                    <li class="my-px">
                        <a href="#"
                            class="flex flex-row items-center h-10 px-3 rounded-lg font-semibold text-white hover:bg-green-400 hover:text-black">
                            <span class="flex items-center justify-center text-lg text-white">
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                            <span class="ml-3">Perfil</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                            class="flex flex-row items-center h-10 px-3 rounded-lg font-semibold text-white hover:bg-green-400 hover:text-black">
                            <span class="flex items-center justify-center text-lg text-white">
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path
                                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </span>
                            <span class="ml-3">Configuración</span>
                        </a>
                    </li>
                    <li class="my-px">
                        <a href="#"
                            class="flex flex-row items-center h-10 px-3 rounded-lg font-semibold text-white hover:bg-red-700 hover:text-white">
                            <span class="flex items-center justify-center text-lg text-red-400 ">
                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path
                                        d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span class="ml-3">Cerrar Sesión</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <main class="main flex flex-col flex-grow -ml-64 md:ml-0 transition-all duration-150 ease-in">
            <header class="header bg-white shadow py-4 px-4">
                <div class="header-content flex items-center flex-row">
                    <form action="#">
                        <div class="hidden md:flex relative">
                            <div
                                class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>

                            <input id="search" type="text" name="search"
                                class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-300 w-full h-10 focus:outline-none focus:border-indigo-400"
                                placeholder="Buscar..." />
                        </div>
                        <div class="flex md:hidden">
                            <a href="#" class="flex items-center justify-center h-10 w-10 border-transparent">
                                <svg class="h-6 w-6 text-gray-500" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </a>
                        </div>
                    </form>
                    <div class="flex ml-auto">
                        <p class="flex flex-row items-center">
                            <img src="{{ asset('img/hacker.png') }}" alt = ""
                                class="h-10 w-10 bg-gray-200 border rounded-full" />
                            <span class="flex flex-col ml-2">
                                <span class="truncate w-28 font-semibold tracking-wide leading-none">Josue Chan</span>
                                <span class="truncate w-20 text-gray-80 text-sm leading-none mt-1">Profesor</span>
                            </span>
                        </p>
                    </div>
                </div>
            </header>
            <div class="main-content flex flex-col flex-grow p-4 ">
                <h1 class="font-bold text-2xl text-gray-700">@yield('titlegeneral')</h1>

                <div class="flex flex-col flex-grow border-4 border-green-900  bg-white rounded mt-4">
                    @yield('additional-content')
                </div>
            </div>
    </div>

    </main>
</body>

</html>
