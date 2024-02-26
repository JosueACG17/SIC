<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>@yield('titulo')</title>
</head>

<body>
    <main>
        @yield('contenido')
    </main>

    <footer class="bg-white ">
        <div class="container flex flex-col items-center justify-between p-3 mx-auto space-y-4 sm:space-y-0 sm:flex-row">
            <p class="inline-flex flex-row items-center">
                <img src="https://cdn-icons-png.freepik.com/256/2098/2098402.png?ga=GA1.1.295903305.1708038180&semt=ais"
                    class="h-6 w-6"></img>
                <span class="leading-10 text-black text-2xl font-bold ml-1 uppercase">Sic</span>
            </a>
    
            <p class="text-medium lg:ml-28 font-semibold text-black">Todos los derechos reservados.</p>

    
            <div class="flex -mx-2">
                <p class="text-medium font-semibold text-black">Universidad Tecnologica de Cancún</p>
            </div>
        </div>
    </footer>
</body>

</html>
