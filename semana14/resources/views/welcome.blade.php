<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* Estilos inline de Tailwind (mantenidos de tu original) */
                @layer theme { :root { --font-sans: 'Instrument Sans', ui-sans-serif; } }
                /* ... (el resto de tu CSS permanece igual) ... */
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">

        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] border text-[#1b1b18] dark:border-[#3E3E3A] rounded-sm text-sm">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] border text-[#1b1b18] dark:border-[#3E3E3A] rounded-sm text-sm">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <!-- Sección de Contenido Izquierda -->
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                    <h1 class="mb-1 font-medium">¡Bienvenido al sistema!</h1>
                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Laravel tiene un ecosistema increíble. Comencemos con lo siguiente:</p>

                    <ul class="flex flex-col mb-4 lg:mb-6">
                        <li class="flex items-center gap-4 py-2 relative">
                            <div class="flex h-6 w-6 items-center justify-center rounded-full bg-[#f53003] text-white">1</div>
                            <span>Configura tu base de datos en el archivo <code>.env</code></span>
                        </li>
                        <li class="flex items-center gap-4 py-2 relative">
                            <div class="flex h-6 w-6 items-center justify-center rounded-full bg-[#f53003] text-white">2</div>
                            <span>Ejecuta las migraciones con <code>php artisan migrate</code></span>
                        </li>
                    </ul>
                </div>

                <!-- Sección de Imagen/Derecha (Opcional) -->
                <div class="relative aspect-[335/376] w-full shrink-0 overflow-hidden rounded-t-lg bg-[#dbdbd7] lg:aspect-auto lg:w-[438px] lg:rounded-t-none lg:rounded-r-lg">
                    <div class="absolute inset-0 flex items-center justify-center text-[#706f6c]">
                        <!-- Puedes colocar una imagen o logo aquí -->
                        <span>Imagen del Proyecto</span>
                    </div>
                </div>
            </main>
        </div>

    </body>
</html>
