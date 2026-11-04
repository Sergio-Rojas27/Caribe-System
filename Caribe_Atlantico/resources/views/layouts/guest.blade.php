<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Multiservicios Caribe Atlántico') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-slate-800 bg-slate-50 min-h-full flex flex-col justify-between selection:bg-caribe-red selection:text-white">
        
        <!-- Header minimalista para volver a la tienda / portal -->
        <header class="w-full bg-white border-b border-slate-200/80 sticky top-0 z-30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
                <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo Caribe Atlántico" class="h-10 w-auto object-contain transition-transform group-hover:scale-105">
                    <div class="hidden sm:block">
                        <span class="block text-sm font-extrabold tracking-tight text-caribe-blue uppercase leading-tight">
                            Multiservicios Caribe Atlántico
                        </span>
                        <span class="block text-[11px] font-medium text-caribe-red uppercase tracking-wider">
                            2022 C.A. • Taller & Recinto Automotriz
                        </span>
                    </div>
                </a>

                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-xs font-semibold text-slate-600 hover:text-caribe-red transition-colors px-3 py-1.5 rounded-lg hover:bg-slate-100">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Volver al Inicio
                </a>
            </div>
        </header>

        <!-- Contenedor Central con Split Layout Profesional -->
        <main class="flex-1 flex items-center justify-center p-4 sm:p-6 lg:p-8">
            <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl shadow-slate-200/60 border border-slate-200/90 overflow-hidden grid grid-cols-1 lg:grid-cols-12">
                
                <!-- Columna Izquierda: Identidad de Marca y Beneficios (Tonos Azul Atlántico + Rojo) -->
                <div class="lg:col-span-5 bg-gradient-to-br from-caribe-blueDeep via-caribe-blue to-caribe-blueNavy p-8 sm:p-10 text-white flex flex-col justify-between relative overflow-hidden">
                    <!-- Elementos decorativos sutiles -->
                    <div class="absolute -right-16 -top-16 w-56 h-56 bg-caribe-red/20 rounded-full blur-3xl pointer-events-none"></div>
                    <div class="absolute -left-16 -bottom-16 w-56 h-56 bg-caribe-blueAtlantic/30 rounded-full blur-3xl pointer-events-none"></div>

                    <div class="relative z-10">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-white/10 backdrop-blur-md rounded-full text-xs font-semibold text-white/90 border border-white/10 mb-6">
                            <span class="w-2 h-2 rounded-full bg-caribe-red animate-pulse"></span>
                            San Juan Bautista • Margarita
                        </div>

                        <div class="mb-8">
                            <h2 class="text-2xl font-black tracking-tight text-white leading-tight">
                                Tu Taller Mecánico & Recinto de Repuestos
                            </h2>
                            <p class="mt-2 text-xs sm:text-sm text-slate-300 leading-relaxed">
                                Cuidamos tu inversión automotriz con diagnóstico de precisión, repuestos originales y seguimiento continuo.
                            </p>
                        </div>

                        <!-- Lista de Beneficios del Sistema -->
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-caribe-red/20 border border-caribe-red/40 flex items-center justify-center shrink-0 text-caribe-redLight">
                                    <svg class="w-4 h-4 text-red-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Tarjeta de Vida Vehicular</h4>
                                    <p class="text-[12px] text-slate-300">Conoce cuándo cambiar aceite, pastillas y fluidos antes de averías.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-caribe-blueAtlantic/20 border border-caribe-blueAtlantic/40 flex items-center justify-center shrink-0 text-sky-200">
                                    <svg class="w-4 h-4 text-sky-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Citas Prioritarias</h4>
                                    <p class="text-[12px] text-slate-300">Reserva turno en taller mecánico sin filas y con asignación técnica.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-white/10 border border-white/20 flex items-center justify-center shrink-0 text-white">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-white uppercase tracking-wider">Stock y Repuestos Garantizados</h4>
                                    <p class="text-[12px] text-slate-300">Lubricantes originales de alta gama y componentes de calidad.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie de la columna con link a Instagram -->
                    <div class="mt-8 pt-6 border-t border-white/10 flex items-center justify-between text-xs text-slate-300 relative z-10">
                        <span class="font-medium">Comunidad Caribe</span>
                        <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 font-bold text-white hover:text-caribe-redLight transition-colors">
                            <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                            @mscaribeatlantico
                        </a>
                    </div>
                </div>

                <!-- Columna Derecha: Formulario Limpio / Minimalista -->
                <div class="lg:col-span-7 p-8 sm:p-10 flex flex-col justify-center bg-white">
                    {{ $slot }}
                </div>
            </div>
        </main>

        <!-- Footer Minimalista -->
        <footer class="w-full py-4 text-center text-xs text-slate-500 bg-white border-t border-slate-200">
            <p>© {{ date('Y') }} Multiservicios Caribe Atlántico 2022 C.A. • RIF: J-503127830 • San Juan Bautista, Margarita</p>
        </footer>
    </body>
</html>

