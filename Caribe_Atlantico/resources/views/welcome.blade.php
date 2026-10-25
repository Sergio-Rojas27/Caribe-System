<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multiservicios Caribe Atlántico C.A.</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-gray-900">

    <!-- Navegación Superior -->
    <nav class="bg-caribe-red border-b border-red-700 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3">
                        <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo" class="h-10 w-auto">
                        <span class="text-lg font-bold text-white tracking-wide">
                            MULTISERVICIOS CARIBE ATLÁNTICO 2022 C.A.
                        </span>
                    </a>
                </div>

                <div class="flex items-center gap-4">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-4 py-2 bg-caribe-darkRed text-white rounded-md hover:bg-red-900 font-semibold text-sm transition">
                                Panel Principal
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-white hover:text-gray-200 font-medium text-sm transition">
                                Iniciar Sesión
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-4 py-2 bg-white text-caribe-red font-semibold text-sm rounded-md hover:bg-gray-100 transition shadow-sm">
                                    Registrarse
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Sección Principal / Hero -->
    <section class="py-16 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-extrabold text-gray-900 sm:text-5xl">
                Mantenimiento y Mecánica Automotriz Especializada
            </h1>
            <p class="mt-4 text-lg text-gray-600 max-w-3xl mx-auto">
                Gestión digital de servicios, diagnóstico integral y seguimiento en tiempo real del mantenimiento de tu vehículo en San Juan Bautista.
            </p>
            <div class="mt-8 flex justify-center gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-6 py-3 bg-caribe-red text-white font-bold rounded-lg shadow hover:bg-caribe-darkRed transition">
                        Ir al Sistema
                    </a>
                @else
                    <a href="{{ route('login') }}" class="px-6 py-3 bg-caribe-red text-white font-bold rounded-lg shadow hover:bg-caribe-darkRed transition">
                        Ingresar al Sistema
                    </a>
                @endauth
            </div>
        </div>
    </section>

    <!-- Información del Negocio / Servicios -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Nuestros Servicios</h2>
                <p class="text-gray-600 mt-2">Atención profesional para garantizar el rendimiento de tu vehículo.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Tarjeta 1 -->
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-red-100 text-caribe-red flex items-center justify-center rounded-lg font-bold text-xl mb-4">
                        🛠️
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mecánica General</h3>
                    <p class="text-gray-600 text-sm">
                        Diagnóstico computarizado, revisión de motor, frenos, suspensión y tren delantero.
                    </p>
                </div>

                <!-- Tarjeta 2 -->
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-red-100 text-caribe-red flex items-center justify-center rounded-lg font-bold text-xl mb-4">
                        🛢️
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Mantenimiento Preventivo</h3>
                    <p class="text-gray-600 text-sm">
                        Cambios de aceite, filtros, fluidos y afinación de motor para prolongar la vida útil de tu auto.
                    </p>
                </div>

                <!-- Tarjeta 3 -->
                <div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-red-100 text-caribe-red flex items-center justify-center rounded-lg font-bold text-xl mb-4">
                        📋
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Historial Digital</h3>
                    <p class="text-gray-600 text-sm">
                        Consulta en línea el historial de reparación de tu vehículo y el estatus de las órdenes de servicio.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer / Pie de Página -->
    <footer class="bg-red-900 text-white py-8 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm text-gray-400">
            <p class="font-bold text-white mb-1">Multiservicios Caribe Atlántico 2022 C.A.</p>
            <p>San Juan Bautista, Isla de Margarita, Venezuela</p>
            <p class="mt-4 text-xs text-gray-500">© {{ date('Y') }} Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>
