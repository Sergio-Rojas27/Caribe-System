<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#07162C]">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Multiservicios Caribe Atlántico') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-[#07162C] text-slate-100 min-h-full flex flex-col justify-between selection:bg-caribe-red selection:text-white">
        <div class="flex-1">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-[#0A192F]/80 backdrop-blur-md border-b border-slate-800 shadow-md">
                    <div class="max-w-7xl mx-auto py-6 px-6 sm:px-8 lg:px-12">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <!-- Footer Administrativo / Cliente -->
        <footer class="mt-16 py-8 bg-[#050E1D] border-t border-slate-800 text-center text-xs text-slate-400">
            <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2.5">
                    <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo Caribe Atlántico" class="h-7 w-auto object-contain">
                    <span class="font-bold text-white">Multiservicios Caribe Atlántico 2022 C.A.</span>
                    <span class="text-slate-600">|</span>
                    <span class="text-slate-400">San Juan Bautista, Sector Carapacho, Nueva Esparta</span>
                </div>
                <div class="flex items-center gap-4 text-xs font-semibold">
                    <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" rel="noopener noreferrer" class="text-slate-300 hover:text-caribe-red transition-colors inline-flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5 fill-current text-caribe-red" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        @mscaribeatlantico
                    </a>
                    <span class="text-slate-600">•</span>
                    <span>Taller Mecánico & Recinto</span>
                </div>
            </div>
        </footer>
    </body>
</html>
