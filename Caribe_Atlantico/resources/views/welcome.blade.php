<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multiservicios Caribe Atlántico 2022 C.A. • Taller Mecánico & Recinto Automotriz</title>
    <meta name="description" content="Centro automotriz integral en San Juan Bautista, Isla de Margarita. Taller mecánico especializado, tienda de lubricantes y repuestos, agendamiento de citas y Tarjeta de Vida Vehicular.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white text-slate-800 selection:bg-caribe-red selection:text-white" 
      x-data="{ 
          kmSimulado: 65000,
          tipoAuto: 'sedan',
          citaServicio: 'Mantenimiento Preventivo Integral',
          citaNombre: '',
          citaTelefono: '',
          citaFecha: '{{ date('Y-m-d', strtotime('+1 day')) }}',
          citaTurno: 'Mañana (8:00 AM - 12:00 PM)',
          citaEnviadaHome: false,
          enviarCita() {
              if(!this.citaNombre || !this.citaTelefono) {
                  alert('Por favor indica tu nombre y teléfono para confirmar tu turno.');
                  return;
              }
              this.citaEnviadaHome = true;
          }
      }">

    <!-- Top Announcement Bar (Tonos Azules Marino + Toque Rojo) -->
    <div class="bg-caribe-blueDeep text-white text-xs py-2 px-4 border-b border-white/10 hidden sm:block">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-4">
                <span class="inline-flex items-center gap-1.5 font-medium text-slate-300">
                    <span class="w-2 h-2 rounded-full bg-caribe-red animate-pulse"></span>
                    Sector Carapacho, San Juan Bautista, Isla de Margarita
                </span>
                <span class="text-slate-500">|</span>
                <span class="text-slate-300 font-medium">Horario: Lun a Sáb 8:00 AM - 5:00 PM</span>
            </div>
            <div class="flex items-center gap-4 text-xs font-semibold">
                <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" rel="noopener noreferrer" class="hover:text-caribe-redLight inline-flex items-center gap-1.5 transition-colors">
                    <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    <span>@mscaribeatlantico</span>
                </a>
                <span class="text-slate-500">•</span>
                <a href="tel:04122050350" class="hover:text-caribe-redLight font-semibold text-white transition-colors">
                    📞 0412-2050350
                </a>
            </div>
        </div>
    </div>

    <!-- Navegación Principal Minimalista -->
    <nav class="bg-white/95 backdrop-blur-md sticky top-0 z-40 border-b border-slate-200 shadow-2xs">
        <div class="h-1 w-full bg-gradient-to-r from-caribe-red via-caribe-blueNavy to-caribe-blueAtlantic"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <!-- Brand / Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                        <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo Multiservicios Caribe Atlántico" class="h-12 w-auto object-contain transition-transform group-hover:scale-105">
                        <div class="flex flex-col">
                            <span class="text-base sm:text-lg font-black text-caribe-blue tracking-tight leading-tight uppercase">
                                Caribe Atlántico
                            </span>
                            <span class="text-[10px] sm:text-[11px] font-bold text-caribe-red tracking-wider uppercase">
                                2022 C.A. • Taller & Recinto Automotriz
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Enlaces de Secciones -->
                <div class="hidden lg:flex items-center space-x-6 text-xs font-bold uppercase tracking-wider text-slate-600">
                    <a href="#recinto" class="hover:text-caribe-red transition-colors py-1">El Recinto</a>
                    <a href="#servicios" class="hover:text-caribe-red transition-colors py-1">Taller Mecánico</a>
                    <a href="#stock" class="hover:text-caribe-red transition-colors py-1">Lubricantes & Partes</a>
                    <a href="#tarjeta-vida" class="text-caribe-blueNavy hover:text-caribe-red transition-colors flex items-center gap-1.5 py-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
                        Tarjeta de Vida
                    </a>
                    <a href="#agendar" class="hover:text-caribe-red transition-colors py-1">Agendar Cita</a>
                    <a href="#contacto" class="hover:text-caribe-red transition-colors py-1">Ubicación</a>
                </div>

                <!-- Botones de Acción / Auth -->
                <div class="flex items-center gap-3">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-4 py-2.5 bg-caribe-blueNavy hover:bg-caribe-blue text-white rounded-xl font-bold text-xs shadow-sm transition flex items-center gap-2">
                                <svg class="w-4 h-4 text-caribe-blueAtlantic" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                </svg>
                                <span>Mi Panel & Ficha</span>
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="hidden sm:inline-flex text-slate-700 hover:text-caribe-red font-bold text-xs uppercase tracking-wider transition px-3 py-2">
                                Iniciar Sesión
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-4 py-2.5 bg-caribe-red hover:bg-caribe-darkRed text-white font-bold text-xs rounded-xl shadow-md shadow-caribe-red/20 transition flex items-center gap-1.5">
                                    <span>Registrar Vehículo</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION (Estética Blanca, Acentos Rojos y Azules Atlánticos) -->
    <header class="relative overflow-hidden bg-white border-b border-slate-200/80 py-16 lg:py-24">
        <!-- Fondos suaves difuminados con tonos de azul atlántico y rojo de marca -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-caribe-blueLight/50 blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 rounded-full bg-caribe-redLight/40 blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Columna Texto y CTA Principal -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100 border border-slate-200 text-xs font-bold text-caribe-blueNavy">
                        <span class="w-2 h-2 rounded-full bg-caribe-red animate-ping"></span>
                        <span>Centro Automotriz Integral • Isla de Margarita</span>
                    </div>

                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-[1.1]">
                        Todo para tu vehículo en un solo lugar: <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-caribe-red via-caribe-blueNavy to-caribe-blueAtlantic">
                            Taller Especializado y Tienda
                        </span>
                    </h1>

                    <p class="text-base sm:text-lg text-slate-600 max-w-2xl mx-auto lg:mx-0 font-normal leading-relaxed">
                        Bienvenido a <strong>Multiservicios Caribe Atlántico 2022 C.A.</strong> en San Juan Bautista. Combinamos fosa de lubricación rápida, diagnóstico computarizado, repuestos garantizados y la innovadora <strong>Tarjeta de Vida Vehicular</strong> para que tu auto siempre esté en estado óptimo.
                    </p>

                    <!-- Botones de Acción -->
                    <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3">
                        <a href="#agendar" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-sm font-bold shadow-lg shadow-caribe-red/25 transition transform hover:-translate-y-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <span>Agendar Cita en Taller</span>
                        </a>

                        <a href="#tarjeta-vida" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl border border-slate-300 bg-white hover:bg-slate-50 text-caribe-blueNavy text-sm font-bold shadow-xs transition">
                            <svg class="w-4 h-4 text-caribe-blueAtlantic" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>Tarjeta de Vida Vehicular</span>
                        </a>

                        <a href="#recinto" class="w-full sm:w-auto inline-flex items-center justify-center gap-1.5 px-4 py-3.5 text-xs font-bold text-slate-500 hover:text-caribe-red transition">
                            <span>¿Qué posee el recinto?</span>
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </a>
                    </div>

                    <!-- Datos de Confianza en Barra -->
                    <div class="pt-6 grid grid-cols-3 gap-4 border-t border-slate-200/80 text-left">
                        <div>
                            <span class="block text-2xl font-black text-slate-900">+1,500</span>
                            <span class="block text-xs font-medium text-slate-500">Vehículos Atendidos</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-black text-caribe-blueNavy">100%</span>
                            <span class="block text-xs font-medium text-slate-500">Fluidos Certificados</span>
                        </div>
                        <div>
                            <span class="block text-2xl font-black text-caribe-red">21 Puntos</span>
                            <span class="block text-xs font-medium text-slate-500">Revisión Preventiva</span>
                        </div>
                    </div>
                </div>

                <!-- Columna Derecha: Tarjeta Visual Intermitente / Preview -->
                <div class="lg:col-span-5">
                    <div class="relative mx-auto max-w-md lg:max-w-none">
                        <!-- Marco Decorativo con Gradiente Marino -->
                        <div class="absolute -inset-1 rounded-3xl bg-gradient-to-r from-caribe-red via-caribe-blueNavy to-caribe-blueAtlantic opacity-30 blur-lg"></div>
                        
                        <div class="relative bg-white rounded-3xl p-6 sm:p-7 border border-slate-200 shadow-xl space-y-5">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2.5">
                                    <div class="w-9 h-9 rounded-xl bg-caribe-red flex items-center justify-center text-white font-black text-sm shadow-sm">
                                        CA
                                    </div>
                                    <div>
                                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-900">Pasaporte Digital</h3>
                                        <p class="text-[11px] text-slate-500">Multiservicios Caribe Atlántico</p>
                                    </div>
                                </div>
                                <span class="px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">
                                    Al Día
                                </span>
                            </div>

                            <!-- Mockup de Ficha Rápida -->
                            <div class="p-4 rounded-2xl bg-gradient-to-br from-caribe-blueDeep to-caribe-blue text-white">
                                <div class="flex items-center justify-between text-xs text-slate-300">
                                    <span>Vehículo Ejemplo</span>
                                    <span class="font-mono bg-white/10 px-2 py-0.5 rounded text-[10px]">PLACA: AB123CD</span>
                                </div>
                                <div class="text-lg font-black mt-1">Toyota Corolla GLi 1.8L</div>
                                <div class="mt-3 flex items-center justify-between text-xs pt-3 border-t border-white/10">
                                    <div>
                                        <span class="text-slate-400 block text-[10px]">Odómetro</span>
                                        <span class="font-bold">78,750 km</span>
                                    </div>
                                    <div class="text-right">
                                        <span class="text-slate-400 block text-[10px]">Próximo Aceite</span>
                                        <span class="font-bold text-caribe-redLight">En 1,250 km</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Semáforos Preventivos en Vivo -->
                            <div class="space-y-2.5 text-xs">
                                <div>
                                    <div class="flex justify-between font-semibold text-slate-700 mb-1">
                                        <span>🛢️ Aceite Semi-Sintético 10W-30</span>
                                        <span class="text-caribe-red font-bold">82% (Restan 1,250 km)</span>
                                    </div>
                                    <div class="w-full bg-slate-100 rounded-full h-1.5 overflow-hidden">
                                        <div class="bg-caribe-red h-1.5 rounded-full" style="width: 82%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between font-semibold text-slate-700 mb-1">
                                        <span>🛑 Pastillas de Freno & Discos</span>
                                        <span class="text-caribe-blueAtlantic font-bold">65% (Restan 6,500 km)</span>
                                    </div>
                                    <div class="w-full bg-slate-100 rounded-full h-1.5 overflow-hidden">
                                        <div class="bg-caribe-blueAtlantic h-1.5 rounded-full" style="width: 65%"></div>
                                    </div>
                                </div>

                                <div>
                                    <div class="flex justify-between font-semibold text-slate-700 mb-1">
                                        <span>🔄 Alineación & Rotación de Cauchos</span>
                                        <span class="text-amber-600 font-bold">35% (Alerta de servicio)</span>
                                    </div>
                                    <div class="w-full bg-slate-100 rounded-full h-1.5 overflow-hidden">
                                        <div class="bg-amber-500 h-1.5 rounded-full" style="width: 35%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-2">
                                <a href="{{ route('register') }}" class="w-full py-2.5 px-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs flex items-center justify-center gap-2 transition">
                                    <span>Obtener mi Tarjeta de Vida Gratis</span>
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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

    <!-- SECCIÓN: ¿QUÉ POSEE EL RECINTO? (ABREBOCA COMERCIAL COMPLETO) -->
    <section id="recinto" class="py-20 bg-slate-50 border-b border-slate-200/90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-caribe-redLight text-caribe-red text-xs font-bold uppercase tracking-wider mb-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
                    Conoce Nuestras Instalaciones
                </div>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    ¿Qué encuentras en nuestro recinto?
                </h2>
                <p class="text-sm sm:text-base text-slate-600 mt-2">
                    Si aún no nos has visitado en San Juan Bautista, te mostramos la infraestructura, áreas especializadas y suministros que tenemos a tu disposición.
                </p>
            </div>

            <!-- Grilla de las 6 Áreas del Recinto -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Área 1: Taller Mecánico Especializado -->
                <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200 shadow-xs hover:shadow-md transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-red-50 text-caribe-red flex items-center justify-center text-2xl font-bold mb-4 group-hover:bg-caribe-red group-hover:text-white transition-colors">
                        🛠️
                    </div>
                    <h3 class="text-lg font-black text-slate-900 mb-2">Taller Mecánico Especializado</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Fosas y elevadores hidráulicos modernos para mecánica rápida y correctiva: cambio de kit de tiempo, tren delantero, amortiguación, frenos y reparación de motores.
                    </p>
                    <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
                        <li class="flex items-center gap-1.5">✓ Elevadores de alta capacidad</li>
                        <li class="flex items-center gap-1.5">✓ Prensa hidráulica y herramientas especiales</li>
                        <li class="flex items-center gap-1.5">✓ Mecánicos con experiencia comprobada</li>
                    </ul>
                </div>

                <!-- Área 2: Tienda de Lubricantes & Fluidos -->
                <div id="stock" class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200 shadow-xs hover:shadow-md transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-sky-50 text-caribe-blueAtlantic flex items-center justify-center text-2xl font-bold mb-4 group-hover:bg-caribe-blueAtlantic group-hover:text-white transition-colors">
                        🛢️
                    </div>
                    <h3 class="text-lg font-black text-slate-900 mb-2">Boutique de Lubricantes & Filtros</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Stock permanente de aceites originales: minerales, semi-sintéticos y 100% sintéticos (Motul, Castrol, Mobil, Inca, Shell), valvulinas y filtros para todas las marcas.
                    </p>
                    <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
                        <li class="flex items-center gap-1.5">✓ 10W-30, 20W-50, 5W-30, 15W-40</li>
                        <li class="flex items-center gap-1.5">✓ Filtros de aceite, aire, gasolina y cabina</li>
                        <li class="flex items-center gap-1.5">✓ Cambio inmediato en fosa sin costo extra</li>
                    </ul>
                </div>

                <!-- Área 3: Diagnóstico Computarizado -->
                <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200 shadow-xs hover:shadow-md transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-indigo-50 text-indigo-600 flex items-center justify-center text-2xl font-bold mb-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                        💻
                    </div>
                    <h3 class="text-lg font-black text-slate-900 mb-2">Diagnóstico Computarizado</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Escaneo electrónico multipunto para detectar fallas en check engine, transmisión automática, frenos ABS, sensores de oxígeno y borrado de códigos de mantenimiento.
                    </p>
                    <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
                        <li class="flex items-center gap-1.5">✓ Escáner multimarca de última generación</li>
                        <li class="flex items-center gap-1.5">✓ Lectura de parámetros de motor en tiempo real</li>
                        <li class="flex items-center gap-1.5">✓ Informe técnico digital transparente</li>
                    </ul>
                </div>

                <!-- Área 4: Tienda de Repuestos & Partes -->
                <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200 shadow-xs hover:shadow-md transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center text-2xl font-bold mb-4 group-hover:bg-amber-600 group-hover:text-white transition-colors">
                        ⚙️
                    </div>
                    <h3 class="text-lg font-black text-slate-900 mb-2">Tienda de Repuestos & Tren Delantero</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Contamos con repuestos para suspensión y desgaste: pastillas de freno cerámicas, muñones, terminales, bujes, rodamientos, bombas de agua y refrigerantes concentrados.
                    </p>
                    <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
                        <li class="flex items-center gap-1.5">✓ Repuestos certificados y con garantía</li>
                        <li class="flex items-center gap-1.5">✓ Cotización inmediata por WhatsApp</li>
                        <li class="flex items-center gap-1.5">✓ Precios competitivos en la isla</li>
                    </ul>
                </div>

                <!-- Área 5: Alineación, Balanceo & Frenos -->
                <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200 shadow-xs hover:shadow-md transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center text-2xl font-bold mb-4 group-hover:bg-emerald-600 group-hover:text-white transition-colors">
                        🔄
                    </div>
                    <h3 class="text-lg font-black text-slate-900 mb-2">Alineación, Balanceo & Frenos</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Equipo de alineación para asegurar la estabilidad direccional, balanceo computarizado de rines y rectificación de discos para evitar vibraciones al conducir.
                    </p>
                    <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
                        <li class="flex items-center gap-1.5">✓ Cuidado y durabilidad de tus neumáticos</li>
                        <li class="flex items-center gap-1.5">✓ Rectificación de discos y tambores</li>
                        <li class="flex items-center gap-1.5">✓ Purgado de líquido de frenos con máquina</li>
                    </ul>
                </div>

                <!-- Área 6: Sala de Espera Climatizada & Confort -->
                <div class="bg-white p-6 sm:p-7 rounded-2xl border border-slate-200 shadow-xs hover:shadow-md transition-all group">
                    <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center text-2xl font-bold mb-4 group-hover:bg-rose-600 group-hover:text-white transition-colors">
                        ☕
                    </div>
                    <h3 class="text-lg font-black text-slate-900 mb-2">Sala de Espera VIP & Asesoría</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Espacio cómodo y climatizado con café y conexión mientras realizamos el servicio express de tu vehículo, con atención personalizada y presupuestos claros.
                    </p>
                    <ul class="mt-4 space-y-1.5 text-xs text-slate-500">
                        <li class="flex items-center gap-1.5">✓ Ambiente cómodo y limpio</li>
                        <li class="flex items-center gap-1.5">✓ Vista directa al área de trabajo</li>
                        <li class="flex items-center gap-1.5">✓ Aceptamos múltiples métodos de pago</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN INTERACTIVA: TARJETA DE VIDA VEHICULAR Y SIMULADOR DE MANTENIMIENTO PREVENTIVO -->
    <section id="tarjeta-vida" class="py-20 bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Explicación de la Tarjeta de Vida -->
                <div class="lg:col-span-5 space-y-5">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-caribe-blueLight text-caribe-blueNavy text-xs font-bold uppercase tracking-wider">
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-blueAtlantic"></span>
                        Innovación Exclusiva Caribe Atlántico
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                        ¿Qué es la Tarjeta de Vida Vehicular?
                    </h2>

                    <p class="text-sm sm:text-base text-slate-600 leading-relaxed">
                        Es el <strong>pasaporte digital</strong> de salud de tu auto. En lugar de llevar libretas o arriesgarte a olvidar un cambio de aceite, nuestro sistema calcula el desgaste preventivo según tu kilometraje y hábitos de manejo.
                    </p>

                    <div class="space-y-3.5 pt-2">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-caribe-red/15 text-caribe-red flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">
                                1
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700">
                                <strong>Prevención real:</strong> Te avisa antes de que las pastillas rayen los discos o el aceite pierda viscosidad.
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-caribe-blueAtlantic/15 text-caribe-blueAtlantic flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">
                                2
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700">
                                <strong>Historial valorable:</strong> Si en el futuro decides vender tu auto, puedes mostrar el récord técnico certificado por Caribe Atlántico.
                            </p>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-xs shrink-0 mt-0.5">
                                3
                            </div>
                            <p class="text-xs sm:text-sm text-slate-700">
                                <strong>100% Gratuita:</strong> Solo necesitas crear tu cuenta para comenzar a registrar tus mantenimientos.
                            </p>
                        </div>
                    </div>

                    <div class="pt-4">
                        <a href="{{ route('register') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold shadow-md shadow-caribe-red/20 transition">
                            <span>Crear Cuenta y Activar mi Tarjeta</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Simulador Interactivo en Vivo con Alpine.js -->
                <div class="lg:col-span-7">
                    <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-8 shadow-sm">
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-6 border-b border-slate-200">
                            <div>
                                <span class="text-xs font-bold uppercase tracking-wider text-caribe-blueAtlantic">Simulador de Mantenimiento</span>
                                <h3 class="text-xl font-black text-slate-900">¿Qué le toca a tu auto hoy?</h3>
                            </div>
                            <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-white rounded-xl border border-slate-200 text-xs font-bold text-slate-800">
                                <span>Kilometraje:</span>
                                <span class="font-mono text-caribe-red" x-text="Number(kmSimulado).toLocaleString() + ' km'">65,000 km</span>
                            </div>
                        </div>

                        <!-- Selector Deslizante de Kilometraje -->
                        <div class="mt-6 space-y-2">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-600">
                                Mueve la barra para simular el kilometraje de tu vehículo:
                            </label>
                            <input type="range" 
                                   min="5000" 
                                   max="150000" 
                                   step="5000" 
                                   x-model="kmSimulado" 
                                   class="w-full h-2 bg-slate-200 rounded-lg appearance-none cursor-pointer accent-caribe-red" />
                            <div class="flex justify-between text-[11px] text-slate-400 font-mono">
                                <span>5,000 km</span>
                                <span>50,000 km</span>
                                <span>100,000 km</span>
                                <span>150,000 km</span>
                            </div>
                        </div>

                        <!-- Resultados Dinámicos del Simulador -->
                        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Tarjeta 1: Aceite & Fluidos -->
                            <div class="p-4 bg-white rounded-2xl border border-slate-200">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-lg">🛢️</span>
                                    <h4 class="text-xs font-bold text-slate-900">Cambio de Aceite & Filtro</h4>
                                </div>
                                <p class="text-xs text-slate-600" x-show="kmSimulado % 5000 <= 1500">
                                    ⚠️ <strong class="text-caribe-red">¡Mantenimiento Inmediato!</strong> Tu lubricante está cerca del ciclo límite de los 5,000 km.
                                </p>
                                <p class="text-xs text-slate-600" x-show="kmSimulado % 5000 > 1500">
                                    ✓ <strong class="text-emerald-600">Al día.</strong> Próximo cambio recomendado a los <span class="font-bold" x-text="(Math.ceil(kmSimulado / 5000) * 5000).toLocaleString()"></span> km.
                                </p>
                            </div>

                            <!-- Tarjeta 2: Tren Delantero & Alineación -->
                            <div class="p-4 bg-white rounded-2xl border border-slate-200">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-lg">🔄</span>
                                    <h4 class="text-xs font-bold text-slate-900">Alineación & Balanceo</h4>
                                </div>
                                <p class="text-xs text-slate-600" x-show="kmSimulado % 10000 <= 2000">
                                    ⚠️ <strong class="text-amber-600">Recomendado ahora.</strong> Rotación de neumáticos y alineación para evitar desgaste irregular.
                                </p>
                                <p class="text-xs text-slate-600" x-show="kmSimulado % 10000 > 2000">
                                    ✓ <strong class="text-emerald-600">Correcto.</strong> Próxima rotación a los <span class="font-bold" x-text="(Math.ceil(kmSimulado / 10000) * 10000).toLocaleString()"></span> km.
                                </p>
                            </div>

                            <!-- Tarjeta 3: Frenos & Pastillas -->
                            <div class="p-4 bg-white rounded-2xl border border-slate-200">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-lg">🛑</span>
                                    <h4 class="text-xs font-bold text-slate-900">Inspección de Frenos</h4>
                                </div>
                                <p class="text-xs text-slate-600" x-show="kmSimulado >= 40000 && kmSimulado % 20000 <= 3000">
                                    ⚠️ <strong class="text-caribe-red">Revisión profunda:</strong> Desgaste de pastillas y fluido de freno DOT 4.
                                </p>
                                <p class="text-xs text-slate-600" x-show="!(kmSimulado >= 40000 && kmSimulado % 20000 <= 3000)">
                                    ✓ Inspección visual de pastillas recomendada en tu próxima visita de rutina.
                                </p>
                            </div>

                            <!-- Tarjeta 4: Kit de Distribución / Mayor -->
                            <div class="p-4 bg-white rounded-2xl border border-slate-200">
                                <div class="flex items-center gap-2 mb-2">
                                    <span class="text-lg">⚙️</span>
                                    <h4 class="text-xs font-bold text-slate-900">Mantenimiento Mayor</h4>
                                </div>
                                <p class="text-xs text-slate-600" x-show="kmSimulado >= 70000 && kmSimulado <= 90000">
                                    ⚠️ <strong class="text-caribe-red">¡Atención crítica!</strong> Entre 70k y 90k km corresponde revisar o cambiar la correa de tiempo y bomba de agua.
                                </p>
                                <p class="text-xs text-slate-600" x-show="!(kmSimulado >= 70000 && kmSimulado <= 90000)">
                                    ✓ Ciclo de bujías y limpieza de inyectores por ultrasonido cada 30,000 km.
                                </p>
                            </div>
                        </div>

                        <!-- CTA directo hacia la cita -->
                        <div class="mt-6 pt-5 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-3">
                            <span class="text-xs text-slate-500">¿Deseas agendar el servicio que le corresponde a tu vehículo?</span>
                            <a href="#agendar" class="inline-flex items-center gap-1 text-xs font-bold text-caribe-red hover:underline">
                                Agendar este mantenimiento ahora →
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECCIÓN: AGENDAR CITA EN EL TALLER MECÁNICO -->
    <section id="agendar" class="py-20 bg-slate-50 border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-caribe-redLight text-caribe-red text-xs font-bold uppercase tracking-wider mb-3">
                    <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
                    Atención Rápida y Sin Filas
                </div>
                <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                    Agenda tu Cita en el Taller Mecánico
                </h2>
                <p class="text-sm sm:text-base text-slate-600 mt-2">
                    Reserva tu turno de atención con antelación para asegurar puesto en fosa o elevador con nuestros especialistas.
                </p>
            </div>

            <!-- Caja del Formulario -->
            <div class="bg-white rounded-3xl border border-slate-200/90 shadow-xl p-6 sm:p-10">
                <!-- Confirmación cuando se envía -->
                <div x-show="citaEnviadaHome" 
                     x-transition 
                     class="p-6 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-900 mb-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-full bg-emerald-500 text-white flex items-center justify-center shrink-0 font-bold text-lg">
                            ✓
                        </div>
                        <div class="flex-1">
                            <h3 class="text-base font-bold text-emerald-900">¡Cita Pre-Agendada con Éxito!</h3>
                            <p class="text-xs text-emerald-800 mt-1">
                                Gracias, <strong x-text="citaNombre"></strong>. Hemos registrado tu turno para <strong x-text="citaServicio"></strong> el día <strong x-text="citaFecha"></strong>.
                            </p>
                            <div class="mt-4 flex flex-wrap items-center gap-3">
                                <a :href="'https://wa.me/584122050350?text=' + encodeURIComponent('Hola Multiservicios Caribe Atlántico, deseo confirmar mi cita a nombre de ' + citaNombre + ' (Tlf: ' + citaTelefono + ') para el servicio de: ' + citaServicio + ' el día ' + citaFecha + ' (' + citaTurno + ').')" 
                                   target="_blank" 
                                   class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold shadow-sm transition">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.674zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
                                    </svg>
                                    <span>Enviar Confirmación Inmediata por WhatsApp</span>
                                </a>
                                <button @click="citaEnviadaHome = false" class="text-xs font-semibold text-slate-600 hover:text-slate-900 underline">
                                    Hacer otra solicitud
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <form @submit.prevent="enviarCita()" x-show="!citaEnviadaHome" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <!-- Nombre -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Nombre y Apellido
                            </label>
                            <input type="text" 
                                   x-model="citaNombre" 
                                   required 
                                   placeholder="Ej. Juan Pérez"
                                   class="w-full text-xs font-semibold py-3 px-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" />
                        </div>

                        <!-- Teléfono / WhatsApp -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Teléfono / WhatsApp
                            </label>
                            <input type="tel" 
                                   x-model="citaTelefono" 
                                   required 
                                   placeholder="Ej. 0412-1234567"
                                   class="w-full text-xs font-semibold py-3 px-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                        <!-- Servicio -->
                        <div class="sm:col-span-1">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Servicio Deseado
                            </label>
                            <select x-model="citaServicio" class="w-full text-xs font-semibold py-3 px-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none">
                                <option value="Mantenimiento Preventivo Integral">🛠️ Mantenimiento Preventivo</option>
                                <option value="Cambio de Aceite & Filtro Express">🛢️ Cambio de Aceite Express</option>
                                <option value="Diagnóstico por Escáner Computarizado">💻 Diagnóstico por Escáner</option>
                                <option value="Frenos y Tren Delantero">🛑 Frenos y Tren Delantero</option>
                                <option value="Alineación y Balanceo">🔄 Alineación y Balanceo</option>
                                <option value="Aire Acondicionado Automotriz">❄️ Climatización A/A</option>
                            </select>
                        </div>

                        <!-- Fecha -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Fecha Preferida
                            </label>
                            <input type="date" 
                                   x-model="citaFecha" 
                                   required 
                                   class="w-full text-xs font-semibold py-3 px-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" />
                        </div>

                        <!-- Turno -->
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                                Turno Preferido
                            </label>
                            <select x-model="citaTurno" class="w-full text-xs font-semibold py-3 px-3.5 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none">
                                <option value="Mañana (8:00 AM - 12:00 PM)">Mañana (8:00 AM - 12:00 PM)</option>
                                <option value="Tarde (1:00 PM - 5:00 PM)">Tarde (1:00 PM - 5:00 PM)</option>
                            </select>
                        </div>
                    </div>

                    <div class="pt-2 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <p class="text-xs text-slate-500 text-center sm:text-left">
                            📍 Taller ubicado en Carretera Nacional San Juan Bautista, Sector Carapacho.
                        </p>

                        <button type="submit" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold shadow-md shadow-caribe-red/20 transition cursor-pointer">
                            <span>Solicitar Mi Turno en Taller</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- SECCIÓN: UBICACIÓN, COMUNIDAD INSTAGRAM & CONTACTO -->
    <section id="contacto" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Datos del Negocio & Instagram -->
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-caribe-blueLight text-caribe-blueNavy text-xs font-bold uppercase tracking-wider">
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-blueAtlantic"></span>
                        Visítanos en la Isla de Margarita
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">
                        Multiservicios Caribe Atlántico 2022 C.A.
                    </h2>

                    <p class="text-sm text-slate-600 leading-relaxed">
                        Estamos ubicados en una zona de fácil acceso en San Juan Bautista, Municipio Díaz, estado Nueva Esparta. Te brindamos diagnóstico transparente, repuestos garantizados y presupuestos justos sin sorpresas.
                    </p>

                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-caribe-red flex items-center justify-center shrink-0 text-lg">
                                📍
                            </div>
                            <div>
                                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900">Dirección Física</h4>
                                <p class="text-xs sm:text-sm text-slate-600">Carretera Nacional San Juan Bautista, Sector Carapacho, Isla de Margarita, Edo. Nueva Esparta, Venezuela.</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-caribe-blueAtlantic flex items-center justify-center shrink-0 text-lg">
                                🕒
                            </div>
                            <div>
                                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900">Horarios de Atención</h4>
                                <p class="text-xs sm:text-sm text-slate-600">Lunes a Viernes: 8:00 AM - 5:00 PM<br>Sábados: 8:00 AM - 1:00 PM</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3.5">
                            <div class="w-10 h-10 rounded-xl bg-slate-100 text-emerald-600 flex items-center justify-center shrink-0 text-lg">
                                📞
                            </div>
                            <div>
                                <h4 class="text-xs font-bold uppercase tracking-wider text-slate-900">Contacto Directo</h4>
                                <p class="text-xs sm:text-sm text-slate-600">WhatsApp / Llamadas: <a href="tel:04122050350" class="font-bold text-slate-800 hover:text-caribe-red">0412-2050350</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- Botón Destacado de Instagram -->
                    <div class="p-5 rounded-2xl bg-gradient-to-r from-caribe-blueDeep via-caribe-blue to-caribe-blueNavy text-white flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-white/10 flex items-center justify-center text-white">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </div>
                            <div>
                                <span class="block text-xs text-slate-300">Instagram Oficial</span>
                                <span class="block text-sm font-bold text-white">@mscaribeatlantico</span>
                            </div>
                        </div>
                        <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold rounded-xl transition shadow-xs">
                            Ver Publicaciones →
                        </a>
                    </div>
                </div>

                <!-- Mapa / Tarjeta de Identidad de Marca -->
                <div class="lg:col-span-6 flex flex-col justify-between">
                    <div class="bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-8 space-y-6">
                        <div class="flex items-center justify-between pb-4 border-b border-slate-200">
                            <div>
                                <span class="text-xs font-bold text-caribe-red uppercase">Identidad Fiscal</span>
                                <h3 class="text-lg font-black text-slate-900">RIF: J-503127830</h3>
                            </div>
                            <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo" class="h-10 w-auto">
                        </div>

                        <div class="space-y-3 text-xs sm:text-sm text-slate-600">
                            <p>
                                <strong>Multiservicios Caribe Atlántico 2022 C.A.</strong> se fundó con el propósito de ofrecer a conductores locales y visitantes de la Isla de Margarita un servicio transparente, rápido y con inventario real de repuestos y lubricantes de primera categoría.
                            </p>
                            <p>
                                Ya sea que necesites una revisión para viajar a tierra firme, solucionar una falla eléctrica o asegurar el cambio de aceite rutinario de tu auto, en nuestro recinto encuentras la solución definitiva.
                            </p>
                        </div>

                        <div class="pt-2 grid grid-cols-2 gap-3 text-xs">
                            <div class="p-3 bg-white rounded-xl border border-slate-200 text-center">
                                <span class="block font-bold text-slate-900">Métodos de Pago</span>
                                <span class="text-slate-500 text-[11px]">Pago Móvil, Zelle, Efectivo, Punto</span>
                            </div>
                            <div class="p-3 bg-white rounded-xl border border-slate-200 text-center">
                                <span class="block font-bold text-slate-900">Garantía Escrita</span>
                                <span class="text-slate-500 text-[11px]">En mano de obra y repuestos</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER INSTITUCIONAL -->
    <footer class="bg-caribe-blueDeep text-white border-t border-white/10 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 pb-8 border-b border-white/10">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo" class="h-10 w-auto object-contain">
                    <div>
                        <span class="block text-sm font-extrabold uppercase tracking-tight text-white">
                            Multiservicios Caribe Atlántico 2022 C.A.
                        </span>
                        <span class="block text-[11px] text-caribe-redLight font-medium">
                            San Juan Bautista • Isla de Margarita • RIF: J-503127830
                        </span>
                    </div>
                </div>

                <div class="flex items-center gap-6 text-xs text-slate-300 font-semibold">
                    <a href="#recinto" class="hover:text-white transition">El Recinto</a>
                    <a href="#servicios" class="hover:text-white transition">Taller Mecánico</a>
                    <a href="#tarjeta-vida" class="hover:text-white transition">Tarjeta de Vida</a>
                    <a href="#agendar" class="hover:text-white transition">Agendar Cita</a>
                    <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" rel="noopener noreferrer" class="text-caribe-redLight hover:text-white transition flex items-center gap-1">
                        @mscaribeatlantico
                    </a>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-400 gap-4">
                <p>© {{ date('Y') }} Multiservicios Caribe Atlántico 2022 C.A. Todos los derechos reservados.</p>
                <p>Digitalización Automotriz & Gestión de Taller</p>
            </div>
        </div>
    </footer>

</body>
</html>
