<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multiservicios Caribe Atlántico 2022 C.A. • Taller Mecánico & Recinto Automotriz</title>
    <meta name="description" content="Centro automotriz integral en San Juan Bautista, Isla de Margarita. Taller mecánico especializado, tienda de lubricantes, repuestos y Tarjeta de Vida Vehicular.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-slate-900 text-slate-100 selection:bg-caribe-red selection:text-white" 
      x-data="{ 
          menuDrawer: false,
          activeTab: 'taller',
          tipoVehiculo: 'sedan',
          kmSimulado: 65000,
          servicioSeleccionado: 'Mantenimiento Preventivo Integral',
          turnoSeleccionado: 'Mañana (8:00 AM - 12:00 PM)',
          citaFecha: '{{ date('Y-m-d', strtotime('+1 day')) }}',
          citaNombre: '',
          citaTelefono: '',
          citaConfirmada: false,
          confirmarCita() {
              if(!this.citaNombre || !this.citaTelefono) {
                  alert('Por favor escribe tu nombre y teléfono para procesar tu turno.');
                  return;
              }
              this.citaConfirmada = true;
          }
      }">

    <!-- Top Announcement Bar (Azul Noche con Acento Rojo) -->
    <div class="bg-[#050E1D] text-slate-300 text-xs py-2.5 px-4 sm:px-8 border-b border-white/10 hidden sm:block">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-6">
                <span class="inline-flex items-center gap-2 font-medium">
                    <span class="w-2 h-2 rounded-full bg-caribe-red animate-pulse"></span>
                    Carretera Nacional San Juan Bautista, Sector Carapacho, Nueva Esparta
                </span>
                <span class="text-white/20">|</span>
                <span class="text-slate-400">Lun a Sáb: 8:00 AM - 5:00 PM</span>
            </div>
            <div class="flex items-center gap-5 font-semibold text-xs">
                <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" rel="noopener noreferrer" class="hover:text-caribe-redLight inline-flex items-center gap-1.5 transition-colors">
                    <svg class="w-3.5 h-3.5 fill-current text-caribe-red" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    <span>@mscaribeatlantico</span>
                </a>
                <span class="text-white/20">•</span>
                <a href="https://wa.me/584122050350" target="_blank" class="hover:text-emerald-400 transition-colors inline-flex items-center gap-1">
                    <span>WhatsApp Taller: 0412-2050350</span>
                </a>
            </div>
        </div>
    </div>

    <!-- NAVEGACIÓN PRINCIPAL: COLOR AZUL PROFUNDO, ESPACIOSA Y SIMPLIFICADA CON 3 PUNTOS -->
    <nav class="bg-[#0A192F]/95 backdrop-blur-md sticky top-0 z-40 border-b border-slate-800 shadow-xl">
        <!-- Barra de acento con colores de marca -->
        <div class="h-1 w-full bg-gradient-to-r from-caribe-red via-caribe-blueAtlantic to-caribe-red"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="flex justify-between h-20 items-center">
                
                <!-- Logo & Nombre -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center gap-3.5 group">
                        <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo Caribe Atlántico" class="h-11 sm:h-12 w-auto object-contain transition-transform group-hover:scale-105 drop-shadow">
                        <div class="flex flex-col">
                            <span class="text-base sm:text-lg font-black text-white tracking-tight uppercase group-hover:text-caribe-red transition-colors leading-tight">
                                Caribe Atlántico
                            </span>
                            <span class="text-[10px] font-extrabold text-caribe-red uppercase tracking-widest">
                                Multiservicios 2022 C.A.
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Enlaces Principales Simplificados y Muy Espaciados -->
                <div class="hidden md:flex items-center gap-8 lg:gap-10 text-xs font-bold uppercase tracking-wider text-slate-300">
                    <a href="#recinto" class="hover:text-white transition-colors py-2 relative group">
                        <span>El Recinto</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-caribe-red transition-all group-hover:w-full"></span>
                    </a>

                    <a href="#tarjeta-vida" class="hover:text-white transition-colors py-2 relative group flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-blueAtlantic"></span>
                        <span>Tarjeta de Vida</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-caribe-blueAtlantic transition-all group-hover:w-full"></span>
                    </a>

                    <a href="#agendar" class="hover:text-white transition-colors py-2 relative group">
                        <span>Agendar Cita</span>
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-caribe-red transition-all group-hover:w-full"></span>
                    </a>
                </div>

                <!-- Acciones Derecha: Botón de 3 Puntos (Hamburguesa) + Acceso -->
                <div class="flex items-center gap-3 sm:gap-4">
                    <!-- Botón Destacado de Agendar -->
                    <a href="#agendar" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold shadow-md shadow-caribe-red/30 transition transform hover:-translate-y-0.5">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>Reservar Cita</span>
                    </a>

                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-3.5 py-2 rounded-xl bg-caribe-blueNavy border border-caribe-blueAtlantic/40 text-white hover:bg-caribe-blue text-xs font-bold transition flex items-center gap-1.5">
                            <span>Mi Panel</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-3 py-2 text-xs font-bold text-slate-300 hover:text-white uppercase tracking-wider transition">
                            Ingresar
                        </a>
                    @endauth

                    <!-- BOTÓN DE 3 PUNTOS (MENÚ FLOTANTE / HAMBURGUESA) -->
                    <button @click="menuDrawer = true" 
                            type="button"
                            title="Opciones del Recinto"
                            class="p-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white border border-white/10 flex items-center justify-center gap-1 transition focus:outline-none focus:ring-2 focus:ring-caribe-blueAtlantic cursor-pointer">
                        <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-blueAtlantic"></span>
                    </button>
                </div>

            </div>
        </div>
    </nav>

    <!-- SLIDE-OVER DRAWER ACTIVADO POR LOS 3 PUNTOS -->
    <div x-show="menuDrawer" 
         x-cloak
         class="fixed inset-0 z-50 overflow-hidden" 
         role="dialog" 
         aria-modal="true">
        
        <!-- Backdrop oscuro con blur -->
        <div x-show="menuDrawer" 
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="menuDrawer = false" 
             class="fixed inset-0 bg-black/70 backdrop-blur-sm"></div>

        <div class="fixed inset-y-0 right-0 max-w-full flex pl-10">
            <div x-show="menuDrawer" 
                 x-transition:enter="transform transition ease-in-out duration-300"
                 x-transition:enter-start="translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transform transition ease-in-out duration-300"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="translate-x-full"
                 class="w-screen max-w-md bg-[#07162C] border-l border-slate-800 text-white p-6 sm:p-8 flex flex-col justify-between shadow-2xl">
                
                <div>
                    <!-- Encabezado del Drawer -->
                    <div class="flex items-center justify-between pb-6 border-b border-white/10">
                        <div class="flex items-center gap-3">
                            <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo" class="h-10 w-auto">
                            <div>
                                <h3 class="text-sm font-black uppercase text-white">Caribe Atlántico</h3>
                                <p class="text-[11px] text-caribe-red font-semibold">Menú del Recinto Automotriz</p>
                            </div>
                        </div>

                        <button @click="menuDrawer = false" class="p-2 rounded-lg bg-white/10 text-slate-300 hover:text-white hover:bg-white/20 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Lista de Enlaces y Módulos -->
                    <div class="mt-8 space-y-4">
                        <a @click="menuDrawer = false" href="#recinto" class="flex items-center justify-between p-3.5 rounded-xl bg-white/5 hover:bg-caribe-red/20 border border-white/5 hover:border-caribe-red/30 transition group">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-red-500/20 text-caribe-red flex items-center justify-center font-bold">🛠️</span>
                                <div>
                                    <h4 class="text-xs font-bold uppercase text-white group-hover:text-caribe-red transition-colors">¿Qué posee el recinto?</h4>
                                    <p class="text-[11px] text-slate-400">Taller mecánico, fosa y lubricantes</p>
                                </div>
                            </div>
                            <span class="text-slate-500 group-hover:text-white">→</span>
                        </a>

                        <a @click="menuDrawer = false" href="#tarjeta-vida" class="flex items-center justify-between p-3.5 rounded-xl bg-white/5 hover:bg-caribe-blueAtlantic/20 border border-white/5 hover:border-caribe-blueAtlantic/30 transition group">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-sky-500/20 text-sky-400 flex items-center justify-center font-bold">📋</span>
                                <div>
                                    <h4 class="text-xs font-bold uppercase text-white group-hover:text-sky-300 transition-colors">Tarjeta de Vida Vehicular</h4>
                                    <p class="text-[11px] text-slate-400">Simulador de kilometraje y salud</p>
                                </div>
                            </div>
                            <span class="text-slate-500 group-hover:text-white">→</span>
                        </a>

                        <a @click="menuDrawer = false" href="#agendar" class="flex items-center justify-between p-3.5 rounded-xl bg-white/5 hover:bg-emerald-500/20 border border-white/5 hover:border-emerald-500/30 transition group">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-bold">📅</span>
                                <div>
                                    <h4 class="text-xs font-bold uppercase text-white group-hover:text-emerald-300 transition-colors">Agendar Cita en Taller</h4>
                                    <p class="text-[11px] text-slate-400">Turno prioritario sin esperas</p>
                                </div>
                            </div>
                            <span class="text-slate-500 group-hover:text-white">→</span>
                        </a>

                        <a @click="menuDrawer = false" href="#contacto" class="flex items-center justify-between p-3.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/5 transition group">
                            <div class="flex items-center gap-3">
                                <span class="w-8 h-8 rounded-lg bg-white/10 text-white flex items-center justify-center font-bold">📍</span>
                                <div>
                                    <h4 class="text-xs font-bold uppercase text-white">Ubicación & Horarios</h4>
                                    <p class="text-[11px] text-slate-400">San Juan Bautista, Nueva Esparta</p>
                                </div>
                            </div>
                            <span class="text-slate-500 group-hover:text-white">→</span>
                        </a>
                    </div>

                    <!-- Datos Rápidos del Taller -->
                    <div class="mt-8 p-4 rounded-2xl bg-gradient-to-br from-caribe-blue to-[#0e2747] border border-white/10 text-xs space-y-2">
                        <div class="text-caribe-redLight font-bold uppercase tracking-wider text-[10px]">Atención Personalizada</div>
                        <p class="text-slate-200">¿Deseas saber el precio de un lubricante o repuesto en stock?</p>
                        <a href="https://wa.me/584122050350" target="_blank" class="inline-flex items-center gap-2 font-bold text-white hover:text-emerald-400 pt-1">
                            <span>📞 WhatsApp: 0412-2050350</span>
                        </a>
                    </div>
                </div>

                <!-- Pie del Drawer -->
                <div class="pt-6 border-t border-white/10 space-y-3">
                    <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" class="flex items-center justify-center gap-2 w-full py-2.5 rounded-xl bg-white/10 hover:bg-caribe-red text-white text-xs font-bold transition">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        <span>Instagram @mscaribeatlantico</span>
                    </a>

                    @guest
                        <a href="{{ route('register') }}" class="block text-center py-2.5 rounded-xl bg-caribe-red text-white text-xs font-bold hover:bg-caribe-darkRed transition">
                            Registrar mi Vehículo
                        </a>
                    @endguest
                </div>

            </div>
        </div>
    </div>

    <!-- HERO SECTION: IMPACTO DE COLOR AZUL ATLÁNTICO Y ROJO CON GRAN ESPACIADO -->
    <header class="relative overflow-hidden bg-gradient-to-b from-[#0A192F] via-[#0B2545] to-[#07162C] py-24 sm:py-32 border-b border-slate-800">
        <!-- Luces ambientales de fondo con colores de marca -->
        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[350px] bg-caribe-blueAtlantic/20 rounded-full blur-[140px] pointer-events-none"></div>
        <div class="absolute -top-20 right-10 w-96 h-96 bg-caribe-red/25 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Columna Izquierda: Mensaje Central Dinámico -->
                <div class="lg:col-span-7 space-y-8 text-center lg:text-left">
                    
                    <!-- Badge Flotante de Marca -->
                    <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/15 text-xs font-bold text-white shadow-lg">
                        <span class="w-2 h-2 rounded-full bg-caribe-red animate-ping"></span>
                        <span>Centro Automotriz Integral • San Juan Bautista</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.1]">
                        Todo para tu vehículo: <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-rose-400 to-sky-400">
                            Taller Mecánico & Recinto
                        </span>
                    </h1>

                    <p class="text-base sm:text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
                        En <strong>Multiservicios Caribe Atlántico</strong> combinamos mecánica especializada, boutique de lubricantes con fosa express y la innovadora <strong>Tarjeta de Vida Vehicular</strong> para que tu auto no sufra averías inesperadas en Margarita.
                    </p>

                    <!-- Botones de Acción Amplios -->
                    <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="#agendar" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-2xl bg-caribe-red hover:bg-caribe-darkRed text-white text-sm font-extrabold shadow-xl shadow-caribe-red/30 transition transform hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Agendar Cita en Taller</span>
                        </a>

                        <a href="#tarjeta-vida" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 px-7 py-4 rounded-2xl bg-caribe-blueNavy/80 hover:bg-caribe-blue border border-caribe-blueAtlantic/40 text-white text-sm font-bold shadow-md transition">
                            <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>Tarjeta de Vida Vehicular</span>
                        </a>
                    </div>

                    <!-- Métricas Rápidas en Formato Píldoras -->
                    <div class="pt-6 grid grid-cols-3 gap-3 sm:gap-6 border-t border-white/10 text-center sm:text-left">
                        <div class="p-3 rounded-xl bg-white/5 border border-white/10">
                            <span class="block text-xl sm:text-2xl font-black text-white">+1,500</span>
                            <span class="block text-[11px] text-slate-400 uppercase tracking-wider font-semibold">Atendidos</span>
                        </div>
                        <div class="p-3 rounded-xl bg-white/5 border border-white/10">
                            <span class="block text-xl sm:text-2xl font-black text-sky-400">100%</span>
                            <span class="block text-[11px] text-slate-400 uppercase tracking-wider font-semibold">Fluidos Originales</span>
                        </div>
                        <div class="p-3 rounded-xl bg-white/5 border border-white/10">
                            <span class="block text-xl sm:text-2xl font-black text-caribe-red">21 Puntos</span>
                            <span class="block text-[11px] text-slate-400 uppercase tracking-wider font-semibold">Inspección Express</span>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Tarjeta Digital con Colores Vivos -->
                <div class="lg:col-span-5">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Glow exterior -->
                        <div class="absolute -inset-1.5 rounded-3xl bg-gradient-to-r from-caribe-red via-caribe-blueAtlantic to-caribe-red opacity-40 blur-xl"></div>
                        
                        <div class="relative bg-gradient-to-b from-[#0F2537] to-[#0A192F] rounded-3xl p-6 sm:p-8 border border-white/15 shadow-2xl space-y-6">
                            
                            <!-- Header de la Ficha -->
                            <div class="flex items-center justify-between pb-4 border-b border-white/10">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-xl bg-caribe-red text-white flex items-center justify-center font-black text-base shadow">
                                        CA
                                    </div>
                                    <div>
                                        <h4 class="text-xs font-extrabold uppercase tracking-wider text-white">Pasaporte Vehicular Digital</h4>
                                        <p class="text-[11px] text-slate-400">San Juan Bautista • Margarita</p>
                                    </div>
                                </div>
                                <span class="px-2.5 py-1 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 text-[10px] font-bold">
                                    ● 94% Óptimo
                                </span>
                            </div>

                            <!-- Placa y Modelo con Alta Presencia de Color -->
                            <div class="p-4 rounded-2xl bg-[#050E1D] border border-white/10 flex items-center justify-between">
                                <div>
                                    <span class="text-[10px] text-slate-400 uppercase font-bold tracking-wider">Unidad en Monitoreo</span>
                                    <div class="text-base font-black text-white">Toyota Corolla GLi 1.8L</div>
                                </div>
                                <div class="text-right">
                                    <span class="px-2.5 py-1 rounded-md bg-caribe-red text-white font-mono font-bold text-xs tracking-wider">
                                        AB123CD
                                    </span>
                                </div>
                            </div>

                            <!-- Indicadores con Barras Luminosas -->
                            <div class="space-y-3.5 text-xs">
                                <div>
                                    <div class="flex justify-between font-bold text-slate-200 mb-1">
                                        <span class="flex items-center gap-1.5">🛢️ Aceite Semi-Sintético 10W-30</span>
                                        <span class="text-caribe-red font-black">Restan 1,250 km</span>
                                    </div>
                                    <div class="w-full bg-slate-800 rounded-full h-2 overflow-hidden border border-white/5">
                                        <div class="bg-gradient-to-r from-amber-500 to-caribe-red h-2 rounded-full" style="width: 82%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between font-bold text-slate-200 mb-1">
                                        <span class="flex items-center gap-1.5">🛑 Pastillas de Freno Cerámicas</span>
                                        <span class="text-sky-400 font-black">65% Vida Útil</span>
                                    </div>
                                    <div class="w-full bg-slate-800 rounded-full h-2 overflow-hidden border border-white/5">
                                        <div class="bg-gradient-to-r from-sky-500 to-caribe-blueAtlantic h-2 rounded-full" style="width: 65%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between font-bold text-slate-200 mb-1">
                                        <span class="flex items-center gap-1.5">🔄 Alineación & Rotación</span>
                                        <span class="text-amber-400 font-black">Alerta Preventiva</span>
                                    </div>
                                    <div class="w-full bg-slate-800 rounded-full h-2 overflow-hidden border border-white/5">
                                        <div class="bg-amber-500 h-2 rounded-full" style="width: 35%"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- CTA Rápido hacia registro -->
                            <div class="pt-2">
                                <a href="{{ route('register') }}" class="w-full py-3 px-4 rounded-xl bg-white hover:bg-slate-100 text-slate-900 font-extrabold text-xs flex items-center justify-center gap-2 transition shadow-md">
                                    <span>Obtener mi Tarjeta de Vida Gratis</span>
                                    <svg class="w-4 h-4 text-caribe-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- SECCIÓN: EL RECINTO (ABREBOCA DINÁMICO CON PESTAÑAS Y SIN SOBRECARGA DE TEXTO) -->
    <section id="recinto" class="py-24 sm:py-32 bg-[#050E1D] border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            
            <!-- Encabezado de Sección con Buen Espaciado -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-caribe-red/20 text-caribe-redLight border border-caribe-red/40 text-xs font-bold uppercase tracking-wider mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
                    Abreboca a Nuestras Instalaciones
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight">
                    ¿Qué encuentras en nuestro recinto?
                </h2>
                <p class="text-sm sm:text-base text-slate-400 mt-3 leading-relaxed">
                    Diseñado para que soluciones todo tu mantenimiento automotriz en un solo lugar sin dar vueltas por la isla.
                </p>
            </div>

            <!-- NAVEGACIÓN DINÁMICA POR PESTAÑAS (CHIPS DE COLOR) -->
            <div class="flex flex-wrap items-center justify-center gap-2.5 sm:gap-4 mb-12">
                <button @click="activeTab = 'taller'" 
                        :class="activeTab === 'taller' ? 'bg-caribe-red text-white shadow-lg shadow-caribe-red/30 border-caribe-red' : 'bg-slate-800/80 text-slate-300 hover:bg-slate-800 border-slate-700'"
                        class="px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wider border transition-all flex items-center gap-2 cursor-pointer">
                    <span>🛠️</span>
                    <span>Taller Mecánico</span>
                </button>

                <button @click="activeTab = 'lubricantes'" 
                        :class="activeTab === 'lubricantes' ? 'bg-caribe-blueAtlantic text-white shadow-lg shadow-sky-500/30 border-sky-400' : 'bg-slate-800/80 text-slate-300 hover:bg-slate-800 border-slate-700'"
                        class="px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wider border transition-all flex items-center gap-2 cursor-pointer">
                    <span>🛢️</span>
                    <span>Boutique de Lubricantes</span>
                </button>

                <button @click="activeTab = 'scanner'" 
                        :class="activeTab === 'scanner' ? 'bg-indigo-600 text-white shadow-lg shadow-indigo-500/30 border-indigo-400' : 'bg-slate-800/80 text-slate-300 hover:bg-slate-800 border-slate-700'"
                        class="px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wider border transition-all flex items-center gap-2 cursor-pointer">
                    <span>💻</span>
                    <span>Diagnóstico Computarizado</span>
                </button>

                <button @click="activeTab = 'repuestos'" 
                        :class="activeTab === 'repuestos' ? 'bg-amber-600 text-white shadow-lg shadow-amber-500/30 border-amber-400' : 'bg-slate-800/80 text-slate-300 hover:bg-slate-800 border-slate-700'"
                        class="px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wider border transition-all flex items-center gap-2 cursor-pointer">
                    <span>⚙️</span>
                    <span>Tienda de Repuestos</span>
                </button>

                <button @click="activeTab = 'alineacion'" 
                        :class="activeTab === 'alineacion' ? 'bg-emerald-600 text-white shadow-lg shadow-emerald-500/30 border-emerald-400' : 'bg-slate-800/80 text-slate-300 hover:bg-slate-800 border-slate-700'"
                        class="px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wider border transition-all flex items-center gap-2 cursor-pointer">
                    <span>🔄</span>
                    <span>Alineación & Frenos</span>
                </button>

                <button @click="activeTab = 'vip'" 
                        :class="activeTab === 'vip' ? 'bg-rose-600 text-white shadow-lg shadow-rose-500/30 border-rose-400' : 'bg-slate-800/80 text-slate-300 hover:bg-slate-800 border-slate-700'"
                        class="px-4 sm:px-5 py-2.5 rounded-xl font-bold text-xs uppercase tracking-wider border transition-all flex items-center gap-2 cursor-pointer">
                    <span>☕</span>
                    <span>Sala de Espera VIP</span>
                </button>
            </div>

            <!-- CONTENIDO DINÁMICO SEGMENTADO (TARJETA DESTACADA EN VEZ DE 6 BLOQUES DE TEXTO) -->
            <div class="bg-gradient-to-br from-[#0A192F] to-[#0E2442] border border-slate-700/80 rounded-3xl p-8 sm:p-12 shadow-2xl relative overflow-hidden">
                
                <!-- Pestaña 1: Taller Mecánico -->
                <div x-show="activeTab === 'taller'" x-transition class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7 space-y-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-caribe-red/20 text-caribe-redLight text-xs font-bold uppercase">
                            Infraestructura de Punta
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black text-white">Taller Mecánico Especializado</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            Contamos con elevadores de alta capacidad y fosa operativa para intervenciones rápidas y de alta complejidad: motores, cajas sincrónicas y automáticas, tren delantero y suspensión integral.
                        </p>
                        
                        <!-- Píldoras de Especificaciones -->
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs">
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                🔧 Elevadores Hidráulicos
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                🏎️ Cambio de Kit de Tiempo
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                🛡️ Garantía en Mano de Obra
                            </div>
                        </div>

                        <div class="pt-4 flex items-center gap-4">
                            <a href="#agendar" class="px-5 py-2.5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white font-bold text-xs shadow-md transition">
                                Agendar en Taller Mecánico →
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5 p-6 rounded-2xl bg-white/5 border border-white/10 space-y-4">
                        <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider">Disponibilidad en Recinto</h4>
                        <div class="flex items-center justify-between text-xs pb-2 border-b border-white/10">
                            <span class="text-slate-300">Puestos en Elevador:</span>
                            <span class="font-bold text-emerald-400">● 4 Puestos Disponibles</span>
                        </div>
                        <div class="flex items-center justify-between text-xs pb-2 border-b border-white/10">
                            <span class="text-slate-300">Fosa de Servicio Rápido:</span>
                            <span class="font-bold text-emerald-400">● Atención sin Fila</span>
                        </div>
                        <div class="flex items-center justify-between text-xs">
                            <span class="text-slate-300">Técnicos Certificados:</span>
                            <span class="font-bold text-white">Especialistas en Taller</span>
                        </div>
                    </div>
                </div>

                <!-- Pestaña 2: Lubricantes & Fluidos -->
                <div x-show="activeTab === 'lubricantes'" x-transition class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7 space-y-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-500/20 text-sky-300 text-xs font-bold uppercase">
                            Stock Inmediato en San Juan
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black text-white">Boutique de Lubricantes & Filtros</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            Marcas oficiales garantizadas: <strong>Motul, Castrol, Mobil, Inca y Shell</strong>. Contamos con aceites minerales, semi-sintéticos y 100% sintéticos para todo tipo de motor a gasolina y diésel.
                        </p>
                        
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs">
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                🛢️ 10W-30 / 20W-50 / 5W-30
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                ⚡ Cambio en Fosa Gratuito
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                💨 Filtros de Aire & Aceite
                            </div>
                        </div>

                        <div class="pt-4">
                            <a href="https://wa.me/584122050350?text=Hola,%20deseo%20consultar%20el%20precio%20de%20lubricantes%20en%20stock" target="_blank" class="px-5 py-2.5 rounded-xl bg-caribe-blueAtlantic hover:bg-sky-600 text-white font-bold text-xs shadow-md transition inline-flex items-center gap-2">
                                <span>Consultar Precios de Aceite por WhatsApp</span>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5 p-6 rounded-2xl bg-white/5 border border-white/10 space-y-3">
                        <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider">Marcas Presentes</h4>
                        <div class="flex flex-wrap gap-2 text-xs">
                            <span class="px-3 py-1 rounded-lg bg-white/10 text-white font-bold">MOTUL</span>
                            <span class="px-3 py-1 rounded-lg bg-white/10 text-white font-bold">CASTROL</span>
                            <span class="px-3 py-1 rounded-lg bg-white/10 text-white font-bold">MOBIL</span>
                            <span class="px-3 py-1 rounded-lg bg-white/10 text-white font-bold">INCA</span>
                            <span class="px-3 py-1 rounded-lg bg-white/10 text-white font-bold">SHELL</span>
                            <span class="px-3 py-1 rounded-lg bg-white/10 text-white font-bold">WIX FILTERS</span>
                        </div>
                        <p class="text-[11px] text-slate-400 pt-2">Incluye reseteo de testigo de cambio de aceite en tu tablero.</p>
                    </div>
                </div>

                <!-- Pestaña 3: Diagnóstico Computarizado -->
                <div x-show="activeTab === 'scanner'" x-transition class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7 space-y-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/20 text-indigo-300 text-xs font-bold uppercase">
                            Tecnología Electrónica
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black text-white">Diagnóstico Computarizado & Escáner</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            Detectamos la causa exacta de la luz de <em>Check Engine</em>, fallas en la transmisión automática, sistemas ABS y control de tracción con escáneres multimarca de última generación.
                        </p>
                        
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs">
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                💻 Lectura en Tiempo Real
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                📊 Reseteo de Códigos
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                📑 Informe Técnico PDF
                            </div>
                        </div>

                        <div class="pt-4">
                            <a href="#agendar" class="px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-bold text-xs shadow-md transition">
                                Agendar Escaneo Electrónico →
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5 p-6 rounded-2xl bg-white/5 border border-white/10 space-y-3">
                        <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider">Sistemas Evaluados</h4>
                        <ul class="text-xs space-y-2 text-slate-300">
                            <li class="flex items-center gap-2">✓ Sensores de Oxígeno & Mezcla Aire/Combustible</li>
                            <li class="flex items-center gap-2">✓ Cuerpo de aceleración e inyectores</li>
                            <li class="flex items-center gap-2">✓ Módulos ABS, Airbags y Transmisión</li>
                        </ul>
                    </div>
                </div>

                <!-- Pestaña 4: Tienda de Repuestos -->
                <div x-show="activeTab === 'repuestos'" x-transition class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7 space-y-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/20 text-amber-300 text-xs font-bold uppercase">
                            Piezas Garantizadas
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black text-white">Tienda de Repuestos & Tren Delantero</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            Muñones, terminales, rodamientos, pastillas de freno, bombas de agua y refrigerantes concentrados. Si la pieza no está en vitrina, la gestionamos con entrega rápida en el recinto.
                        </p>
                        
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs">
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                ⚙️ Tren Delantero
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                🛑 Pastillas Cerámicas
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                ❄️ Coolant Concentrado
                            </div>
                        </div>

                        <div class="pt-4">
                            <a href="https://wa.me/584122050350?text=Hola,%20deseo%20cotizar%20un%20repuesto%20para%20mi%20vehículo" target="_blank" class="px-5 py-2.5 rounded-xl bg-amber-600 hover:bg-amber-700 text-white font-bold text-xs shadow-md transition inline-flex items-center gap-2">
                                <span>Cotizar Repuesto con Asesor</span>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5 p-6 rounded-2xl bg-white/5 border border-white/10 space-y-3">
                        <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider">Beneficio del Recinto</h4>
                        <p class="text-xs text-slate-300 leading-relaxed">
                            Comprar el repuesto e instalarlo en nuestro mismo taller te otorga <strong>garantía integral de repuesto + instalación</strong> en una sola factura.
                        </p>
                    </div>
                </div>

                <!-- Pestaña 5: Alineación & Frenos -->
                <div x-show="activeTab === 'alineacion'" x-transition class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7 space-y-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-xs font-bold uppercase">
                            Seguridad al Conducir
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black text-white">Alineación, Balanceo & Rectificación</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            Equipo digital para asegurar que tu vehículo ruede derecho sin gastar los cauchos por dentro o por fuera. Rectificadora de discos y tambores para eliminar vibraciones en el pedal de freno.
                        </p>
                        
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs">
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                🔄 Alineación Computarizada
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                ⚖️ Balanceo de Rines
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                💿 Rectificación de Discos
                            </div>
                        </div>

                        <div class="pt-4">
                            <a href="#agendar" class="px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs shadow-md transition">
                                Agendar Chequeo de Frenos y Tren →
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-5 p-6 rounded-2xl bg-white/5 border border-white/10 space-y-3">
                        <h4 class="text-xs font-bold uppercase text-slate-400 tracking-wider">¿Cuándo realizarlo?</h4>
                        <p class="text-xs text-slate-300">Cada 10,000 km o cuando sientas que el volante vibra a más de 80 km/h o se desvía en recta.</p>
                    </div>
                </div>

                <!-- Pestaña 6: Sala VIP & Espera -->
                <div x-show="activeTab === 'vip'" x-transition class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7 space-y-5">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-rose-500/20 text-rose-300 text-xs font-bold uppercase">
                            Atención Premium
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-black text-white">Sala de Espera VIP Climatizada</h3>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            No tienes por qué esperar de pie bajo el calor. Nuestra sala cuenta con aire acondicionado, café, conexión y visual directa a los elevadores para que veas el trabajo en tu auto.
                        </p>
                        
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3 pt-2 text-xs">
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                ❄️ Climatizada 100%
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                ☕ Café de Cortesía
                            </div>
                            <div class="p-3 rounded-xl bg-white/5 border border-white/10 font-bold text-slate-200">
                                💳 Todos los Métodos de Pago
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-5 p-6 rounded-2xl bg-white/5 border border-white/10 text-xs text-slate-300 space-y-2">
                        <span class="text-caribe-redLight font-bold uppercase tracking-wider text-[10px]">Métodos Aceptados</span>
                        <p>Pago Móvil, Transferencias, Zelle, Efectivo y Punto de Venta activo.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- SECCIÓN: TARJETA DE VIDA VEHICULAR Y SIMULADOR (ALTO CONTRASTE Y DINAMISMO) -->
    <section id="tarjeta-vida" class="py-24 sm:py-32 bg-[#0A192F] border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Explicación de la Tarjeta con Chips -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-caribe-blueAtlantic/20 text-sky-300 border border-caribe-blueAtlantic/30 text-xs font-bold uppercase tracking-wider">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                        Pasaporte de Salud Automotriz
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight">
                        Tarjeta de Vida Vehicular
                    </h2>

                    <p class="text-sm sm:text-base text-slate-300 leading-relaxed font-normal">
                        Cada vehículo tiene un desgaste único. Nuestra plataforma calcula automáticamente qué componentes requieren atención preventiva para evitar que una pastilla de freno destruya un disco o un lubricante vencido dañe tu motor.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5 border border-white/10">
                            <span class="w-8 h-8 rounded-lg bg-red-500/20 text-caribe-red flex items-center justify-center font-black text-xs shrink-0">1</span>
                            <span class="text-xs sm:text-sm font-semibold text-slate-200">Alertas preventivas antes de averías costosas.</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5 border border-white/10">
                            <span class="w-8 h-8 rounded-lg bg-sky-500/20 text-sky-400 flex items-center justify-center font-black text-xs shrink-0">2</span>
                            <span class="text-xs sm:text-sm font-semibold text-slate-200">Historial certificado para mayor valor de reventa.</span>
                        </div>
                        <div class="flex items-center gap-3 p-3 rounded-xl bg-white/5 border border-white/10">
                            <span class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-black text-xs shrink-0">3</span>
                            <span class="text-xs sm:text-sm font-semibold text-slate-200">100% digital, accesible desde tu teléfono.</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="{{ route('register') }}" class="inline-flex items-center gap-2 px-6 py-3.5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold shadow-lg shadow-caribe-red/25 transition">
                            <span>Crear Cuenta y Activar mi Tarjeta</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Simulador de Kilometraje Interactivo con Gauges -->
                <div class="lg:col-span-7">
                    <div class="bg-gradient-to-br from-[#06152B] to-[#0F2537] border border-white/15 rounded-3xl p-6 sm:p-10 shadow-2xl space-y-6">
                        
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-6 border-b border-white/10">
                            <div>
                                <span class="text-xs font-bold text-sky-400 uppercase tracking-wider">Simulador de Mantenimiento Preventivo</span>
                                <h3 class="text-xl sm:text-2xl font-black text-white mt-1">¿Qué le toca a tu auto hoy?</h3>
                            </div>
                            <div class="px-4 py-2 rounded-xl bg-white/10 border border-white/15 text-right">
                                <span class="block text-[10px] text-slate-400 uppercase font-bold">Odómetro</span>
                                <span class="text-lg font-mono font-black text-caribe-red" x-text="Number(kmSimulado).toLocaleString() + ' km'">65,000 km</span>
                            </div>
                        </div>

                        <!-- Selector Deslizante -->
                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-bold text-slate-300">
                                <span>Mueve el kilometraje de tu vehículo:</span>
                                <span class="text-sky-400 font-mono" x-text="Number(kmSimulado).toLocaleString() + ' km'"></span>
                            </div>
                            <input type="range" 
                                   min="5000" 
                                   max="150000" 
                                   step="5000" 
                                   x-model="kmSimulado" 
                                   class="w-full h-2.5 bg-slate-800 rounded-lg appearance-none cursor-pointer accent-caribe-red" />
                            <div class="flex justify-between text-[10px] text-slate-500 font-mono pt-1">
                                <span>5,000 km</span>
                                <span>50,000 km</span>
                                <span>100,000 km</span>
                                <span>150,000 km</span>
                            </div>
                        </div>

                        <!-- 4 Módulos Dinámicos de Estado -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                            
                            <!-- Aceite -->
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/10">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-bold text-white flex items-center gap-1.5">🛢️ Aceite de Motor</span>
                                    <span class="text-xs font-black text-caribe-red" x-show="kmSimulado % 5000 <= 1500">¡Vencido / Alerta!</span>
                                    <span class="text-xs font-black text-emerald-400" x-show="kmSimulado % 5000 > 1500">Óptimo</span>
                                </div>
                                <p class="text-xs text-slate-300" x-show="kmSimulado % 5000 <= 1500">
                                    Requiere cambio inmediato de aceite y filtro sellado en fosa.
                                </p>
                                <p class="text-xs text-slate-400" x-show="kmSimulado % 5000 > 1500">
                                    Próximo cambio a los <span class="text-white font-bold" x-text="(Math.ceil(kmSimulado / 5000) * 5000).toLocaleString()"></span> km.
                                </p>
                            </div>

                            <!-- Alineación -->
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/10">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-bold text-white flex items-center gap-1.5">🔄 Alineación & Rotación</span>
                                    <span class="text-xs font-black text-amber-400" x-show="kmSimulado % 10000 <= 2000">Recomendado</span>
                                    <span class="text-xs font-black text-emerald-400" x-show="kmSimulado % 10000 > 2000">Al día</span>
                                </div>
                                <p class="text-xs text-slate-300" x-show="kmSimulado % 10000 <= 2000">
                                    Rotar neumáticos delanteros para evitar desgaste irregular.
                                </p>
                                <p class="text-xs text-slate-400" x-show="kmSimulado % 10000 > 2000">
                                    Próxima rotación a los <span class="text-white font-bold" x-text="(Math.ceil(kmSimulado / 10000) * 10000).toLocaleString()"></span> km.
                                </p>
                            </div>

                            <!-- Frenos -->
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/10">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-bold text-white flex items-center gap-1.5">🛑 Sistema de Frenos</span>
                                    <span class="text-xs font-black text-caribe-red" x-show="kmSimulado >= 40000 && kmSimulado % 20000 <= 3000">Revisión profunda</span>
                                    <span class="text-xs font-black text-sky-400" x-show="!(kmSimulado >= 40000 && kmSimulado % 20000 <= 3000)">Inspección normal</span>
                                </div>
                                <p class="text-xs text-slate-300">
                                    Chequeo de grosor de pasta cerámica y líquido DOT 4 en cada visita.
                                </p>
                            </div>

                            <!-- Mantenimiento Mayor -->
                            <div class="p-4 rounded-2xl bg-white/5 border border-white/10">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-xs font-bold text-white flex items-center gap-1.5">⚙️ Correa & Distribución</span>
                                    <span class="text-xs font-black text-caribe-red" x-show="kmSimulado >= 70000 && kmSimulado <= 90000">¡Crítico!</span>
                                    <span class="text-xs font-black text-slate-400" x-show="!(kmSimulado >= 70000 && kmSimulado <= 90000)">Preventivo</span>
                                </div>
                                <p class="text-xs text-slate-300" x-show="kmSimulado >= 70000 && kmSimulado <= 90000">
                                    Entre 70k y 90k km es indispensable sustituir el kit de correa de tiempo.
                                </p>
                                <p class="text-xs text-slate-400" x-show="!(kmSimulado >= 70000 && kmSimulado <= 90000)">
                                    Inspección de bujías y limpieza ultrasónica de inyectores cada 30,000 km.
                                </p>
                            </div>

                        </div>

                        <!-- Botón de acción para el resultado -->
                        <div class="pt-4 border-t border-white/10 flex items-center justify-between">
                            <span class="text-xs text-slate-400">¿Quieres agendar este servicio preventivo?</span>
                            <a href="#agendar" class="text-xs font-extrabold text-caribe-redLight hover:text-white transition flex items-center gap-1">
                                <span>Agendar Turno para este Kilometraje →</span>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- SECCIÓN: AGENDAR CITA EN EL TALLER (PASO A PASO VISUAL Y SIN SOBRECARGA) -->
    <section id="agendar" class="py-24 sm:py-32 bg-[#050E1D] border-b border-slate-800">
        <div class="max-w-4xl mx-auto px-6 sm:px-8">
            
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-caribe-red/20 text-caribe-redLight border border-caribe-red/40 text-xs font-bold uppercase tracking-wider mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
                    Turno Prioritario en Recinto
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight">
                    Agenda tu Cita en el Taller
                </h2>
                <p class="text-sm sm:text-base text-slate-400 mt-3">
                    Asegura tu puesto en fosa o elevador con nuestros especialistas mecánicos.
                </p>
            </div>

            <!-- Caja Principal con Estilo Tecnológico -->
            <div class="bg-gradient-to-b from-[#0A192F] to-[#0E2442] border border-slate-700/80 rounded-3xl p-6 sm:p-10 shadow-2xl">
                
                <!-- Notificación de Éxito -->
                <div x-show="citaConfirmada" 
                     x-transition 
                     class="p-6 rounded-2xl bg-emerald-950/80 border border-emerald-500/40 text-emerald-200 mb-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500 text-white flex items-center justify-center font-black text-lg shrink-0">
                            ✓
                        </div>
                        <div class="flex-1">
                            <h3 class="text-base font-bold text-white">¡Turno Solicitado con Éxito!</h3>
                            <p class="text-xs text-emerald-300 mt-1">
                                Gracias, <strong x-text="citaNombre"></strong>. Tu cita para <strong x-text="servicioSeleccionado"></strong> ha sido registrada para el día <strong x-text="citaFecha"></strong> (<span x-text="turnoSeleccionado"></span>).
                            </p>
                            <div class="mt-4 flex flex-wrap items-center gap-4">
                                <a :href="'https://wa.me/584122050350?text=' + encodeURIComponent('Hola Multiservicios Caribe Atlántico, deseo confirmar mi turno a nombre de ' + citaNombre + ' (Tlf: ' + citaTelefono + ') para: ' + servicioSeleccionado + ' el día ' + citaFecha + ' (' + turnoSeleccionado + ').')" 
                                   target="_blank" 
                                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold shadow transition">
                                    <span>Confirmar por WhatsApp con el Taller</span>
                                </a>
                                <button @click="citaConfirmada = false" class="text-xs font-semibold text-slate-400 hover:text-white underline">
                                    Agendar otro vehículo
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Formulario Segmentado en Pasos Visuales -->
                <form @submit.prevent="confirmarCita()" x-show="!citaConfirmada" class="space-y-8">
                    
                    <!-- PASO 1: Selección de Servicio con Tarjetas Clickeables -->
                    <div>
                        <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-300 mb-3">
                            Paso 1: Selecciona el Servicio Requerido
                        </label>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-2.5 sm:gap-3 text-xs">
                            <button type="button" 
                                    @click="servicioSeleccionado = 'Mantenimiento Preventivo Integral'"
                                    :class="servicioSeleccionado === 'Mantenimiento Preventivo Integral' ? 'bg-caribe-red text-white border-caribe-red' : 'bg-white/5 text-slate-300 border-white/10 hover:bg-white/10'"
                                    class="p-3 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>🛠️</span>
                                <span>Preventivo Integral</span>
                            </button>

                            <button type="button" 
                                    @click="servicioSeleccionado = 'Cambio de Aceite & Filtro Express'"
                                    :class="servicioSeleccionado === 'Cambio de Aceite & Filtro Express' ? 'bg-caribe-blueAtlantic text-white border-sky-400' : 'bg-white/5 text-slate-300 border-white/10 hover:bg-white/10'"
                                    class="p-3 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>🛢️</span>
                                <span>Aceite & Filtro</span>
                            </button>

                            <button type="button" 
                                    @click="servicioSeleccionado = 'Diagnóstico por Escáner Computarizado'"
                                    :class="servicioSeleccionado === 'Diagnóstico por Escáner Computarizado' ? 'bg-indigo-600 text-white border-indigo-400' : 'bg-white/5 text-slate-300 border-white/10 hover:bg-white/10'"
                                    class="p-3 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>💻</span>
                                <span>Escáner / Check Engine</span>
                            </button>

                            <button type="button" 
                                    @click="servicioSeleccionado = 'Frenos y Tren Delantero'"
                                    :class="servicioSeleccionado === 'Frenos y Tren Delantero' ? 'bg-amber-600 text-white border-amber-400' : 'bg-white/5 text-slate-300 border-white/10 hover:bg-white/10'"
                                    class="p-3 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>🛑</span>
                                <span>Frenos & Tren</span>
                            </button>

                            <button type="button" 
                                    @click="servicioSeleccionado = 'Alineación y Balanceo'"
                                    :class="servicioSeleccionado === 'Alineación y Balanceo' ? 'bg-emerald-600 text-white border-emerald-400' : 'bg-white/5 text-slate-300 border-white/10 hover:bg-white/10'"
                                    class="p-3 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>🔄</span>
                                <span>Alineación & Rines</span>
                            </button>

                            <button type="button" 
                                    @click="servicioSeleccionado = 'Aire Acondicionado Automotriz'"
                                    :class="servicioSeleccionado === 'Aire Acondicionado Automotriz' ? 'bg-rose-600 text-white border-rose-400' : 'bg-white/5 text-slate-300 border-white/10 hover:bg-white/10'"
                                    class="p-3 rounded-xl border text-left font-bold transition flex items-center gap-2 cursor-pointer">
                                <span>❄️</span>
                                <span>Climatización A/A</span>
                            </button>
                        </div>
                    </div>

                    <!-- PASO 2: Fecha y Turno -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-300 mb-2">
                                Paso 2: Fecha Deseada
                            </label>
                            <input type="date" 
                                   x-model="citaFecha" 
                                   required 
                                   class="w-full py-3 px-4 rounded-xl bg-slate-900 border border-slate-700 text-white text-xs font-semibold focus:border-sky-400 focus:ring-1 focus:ring-sky-400 outline-none" />
                        </div>

                        <div>
                            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-300 mb-2">
                                Turno de Atención
                            </label>
                            <div class="grid grid-cols-2 gap-2 text-xs">
                                <button type="button" 
                                        @click="turnoSeleccionado = 'Mañana (8:00 AM - 12:00 PM)'"
                                        :class="turnoSeleccionado === 'Mañana (8:00 AM - 12:00 PM)' ? 'bg-white text-slate-900 font-black' : 'bg-white/5 text-slate-300 border border-white/10'"
                                        class="py-3 px-2 rounded-xl text-center font-bold transition cursor-pointer">
                                    Mañana (8 - 12)
                                </button>
                                <button type="button" 
                                        @click="turnoSeleccionado = 'Tarde (1:00 PM - 5:00 PM)'"
                                        :class="turnoSeleccionado === 'Tarde (1:00 PM - 5:00 PM)' ? 'bg-white text-slate-900 font-black' : 'bg-white/5 text-slate-300 border border-white/10'"
                                        class="py-3 px-2 rounded-xl text-center font-bold transition cursor-pointer">
                                    Tarde (1 - 5)
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- PASO 3: Datos de Contacto -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-300 mb-2">
                                Paso 3: Tu Nombre
                            </label>
                            <input type="text" 
                                   x-model="citaNombre" 
                                   required 
                                   placeholder="Nombre y Apellido" 
                                   class="w-full py-3 px-4 rounded-xl bg-slate-900 border border-slate-700 text-white text-xs font-semibold focus:border-sky-400 focus:ring-1 focus:ring-sky-400 outline-none" />
                        </div>

                        <div>
                            <label class="block text-xs font-extrabold uppercase tracking-wider text-slate-300 mb-2">
                                Teléfono o WhatsApp
                            </label>
                            <input type="tel" 
                                   x-model="citaTelefono" 
                                   required 
                                   placeholder="Ej. 0412-2050350" 
                                   class="w-full py-3 px-4 rounded-xl bg-slate-900 border border-slate-700 text-white text-xs font-semibold focus:border-sky-400 focus:ring-1 focus:ring-sky-400 outline-none" />
                        </div>
                    </div>

                    <div class="pt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <span class="text-xs text-slate-400 text-center sm:text-left">
                            📍 Recinto en San Juan Bautista, Carretera Nacional Sector Carapacho.
                        </span>

                        <button type="submit" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-extrabold uppercase tracking-wider shadow-xl shadow-caribe-red/30 transition transform hover:-translate-y-0.5 cursor-pointer">
                            Confirmar Mi Turno en Taller
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </section>

    <!-- SECCIÓN: CONTACTO & COMUNIDAD INSTAGRAM -->
    <section id="contacto" class="py-24 bg-[#0A192F] border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                
                <!-- Instagram Card -->
                <div class="lg:col-span-6 p-8 sm:p-10 rounded-3xl bg-gradient-to-br from-[#06152B] via-[#0E2442] to-caribe-blueNavy border border-white/10 flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-white/10 text-white flex items-center justify-center mb-6">
                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </div>
                        <span class="text-xs font-bold uppercase tracking-wider text-caribe-redLight">Comunidad Oficial</span>
                        <h3 class="text-2xl font-black text-white mt-1">@mscaribeatlantico</h3>
                        <p class="text-xs sm:text-sm text-slate-300 mt-2 leading-relaxed">
                            Conoce los trabajos mecánicos que realizamos a diario, consejos para el cuidado de tu motor en clima costero y ofertas exclusivas de repuestos.
                        </p>
                    </div>
                    <div class="mt-8 pt-4 border-t border-white/10">
                        <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold transition shadow-md">
                            <span>Seguir en Instagram</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Datos de Recinto Card -->
                <div class="lg:col-span-6 p-8 sm:p-10 rounded-3xl bg-[#050E1D] border border-white/10 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between pb-4 border-b border-white/10">
                            <div>
                                <span class="text-[11px] font-bold text-caribe-red uppercase">Identidad Registrada</span>
                                <h4 class="text-lg font-black text-white">RIF: J-503127830</h4>
                            </div>
                            <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo" class="h-10 w-auto">
                        </div>
                        <div class="mt-6 space-y-4 text-xs sm:text-sm text-slate-300 leading-relaxed">
                            <p>
                                <strong>Multiservicios Caribe Atlántico 2022 C.A.</strong> es el recinto de confianza para el cuidado preventivo y correctivo de tu auto en San Juan Bautista, Isla de Margarita.
                            </p>
                            <p class="text-xs text-slate-400">
                                📍 Carretera Nacional San Juan Bautista, Sector Carapacho, Municipio Díaz, Estado Nueva Esparta.
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-white/10 flex flex-wrap items-center justify-between gap-3 text-xs">
                        <span class="text-slate-400">WhatsApp Oficial:</span>
                        <a href="https://wa.me/584122050350" target="_blank" class="font-bold text-emerald-400 hover:underline">
                            0412-2050350
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER INSTITUCIONAL OSCURO Y ESPACIOSO -->
    <footer class="bg-[#050E1D] text-slate-400 border-t border-slate-800 py-12">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex flex-col sm:flex-row items-center justify-between gap-6 text-xs">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo" class="h-8 w-auto">
                <div>
                    <span class="font-bold text-white block">Multiservicios Caribe Atlántico 2022 C.A.</span>
                    <span class="text-[11px] text-slate-500">San Juan Bautista • Margarita</span>
                </div>
            </div>

            <div class="flex items-center gap-6 font-semibold">
                <a href="#recinto" class="hover:text-white transition">El Recinto</a>
                <a href="#tarjeta-vida" class="hover:text-white transition">Tarjeta de Vida</a>
                <a href="#agendar" class="hover:text-white transition">Agendar Cita</a>
                <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" class="text-caribe-redLight hover:text-white transition">Instagram</a>
            </div>

            <p>© {{ date('Y') }} Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>
