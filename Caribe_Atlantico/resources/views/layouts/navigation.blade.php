<nav x-data="{ open: false, dotsOpen: false }" class="bg-[#0A192F] border-b border-slate-800 sticky top-0 z-40 shadow-xl">
    <!-- Línea de colores de marca arriba -->
    <div class="h-1 w-full bg-gradient-to-r from-caribe-red via-caribe-blueAtlantic to-caribe-red"></div>

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12">
        <div class="flex justify-between h-20 items-center">
            
            <div class="flex items-center gap-8 lg:gap-12">
                <!-- Logo / Nombre -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3.5 group">
                        <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo" class="h-11 w-auto object-contain transition-transform group-hover:scale-105 drop-shadow">
                        <div class="flex flex-col">
                            <span class="text-sm sm:text-base font-black text-white tracking-tight uppercase group-hover:text-caribe-red transition-colors leading-tight">
                                Caribe Atlántico
                            </span>
                            <span class="text-[10px] font-extrabold text-caribe-red uppercase tracking-widest">
                                Gestión de Taller & Vehículos
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links Simplificados y Muy Espaciados -->
                <div class="hidden md:flex items-center gap-8 lg:gap-10">
                    <a href="{{ route('dashboard') }}" 
                       class="text-xs font-bold uppercase tracking-wider py-2 relative transition-all {{ request()->routeIs('dashboard') ? 'text-white' : 'text-slate-400 hover:text-white' }}">
                        <span class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full {{ request()->routeIs('dashboard') ? 'bg-caribe-red' : 'bg-transparent' }}"></span>
                            Panel & Métricas
                        </span>
                        @if(request()->routeIs('dashboard'))
                            <span class="absolute bottom-0 left-0 w-full h-0.5 bg-caribe-red"></span>
                        @endif
                    </a>

                    <a href="{{ route('dashboard') }}#tarjeta-vida" 
                       class="text-xs font-bold uppercase tracking-wider py-2 text-slate-400 hover:text-white transition-all flex items-center gap-2">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                        Tarjeta de Vida
                    </a>

                    <a href="{{ route('dashboard') }}#agendar-cita" 
                       class="text-xs font-bold uppercase tracking-wider py-2 text-slate-400 hover:text-white transition-all">
                        Agendar Cita
                    </a>
                </div>
            </div>

            <!-- Right Actions: 3 Puntos (•••) + Botón Cita + Perfil -->
            <div class="hidden sm:flex sm:items-center sm:gap-4">
                
                <!-- Botón de 3 Puntos (Menú Opciones Rápidas) -->
                <div class="relative" x-data="{ dotsOpen: false }">
                    <button @click="dotsOpen = !dotsOpen" 
                            title="Más opciones del recinto"
                            class="p-2.5 rounded-xl bg-white/10 hover:bg-white/20 text-white border border-white/10 flex items-center justify-center gap-1 transition focus:outline-none cursor-pointer">
                        <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-blueAtlantic"></span>
                    </button>

                    <!-- Dropdown de los 3 puntos -->
                    <div x-show="dotsOpen" 
                         @click.away="dotsOpen = false" 
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 mt-3 w-64 rounded-2xl bg-[#07162C] border border-slate-700 shadow-2xl p-2 z-50 text-xs">
                        
                        <div class="px-3 py-2 border-b border-white/10 text-[10px] font-extrabold uppercase tracking-wider text-slate-400">
                            Accesos al Recinto
                        </div>

                        <a href="{{ url('/') }}" class="flex items-center gap-2.5 px-3 py-2.5 rounded-xl text-slate-200 hover:bg-white/10 hover:text-white transition">
                            <span class="text-base">🏢</span>
                            <div>
                                <div class="font-bold">Ver Portal Público</div>
                                <div class="text-[10px] text-slate-400">Instalaciones, stock y abrebocas</div>
                            </div>
                        </a>

                        <a href="https://wa.me/584122050350" target="_blank" class="flex items-center gap-2.5 px-3 py-2.5 rounded-xl text-slate-200 hover:bg-emerald-950/60 hover:text-emerald-300 transition">
                            <span class="text-base">💬</span>
                            <div>
                                <div class="font-bold">WhatsApp Taller</div>
                                <div class="text-[10px] text-slate-400">Consultas de repuestos y fosa</div>
                            </div>
                        </a>

                        <a href="https://www.instagram.com/mscaribeatlantico" target="_blank" class="flex items-center gap-2.5 px-3 py-2.5 rounded-xl text-slate-200 hover:bg-caribe-red/20 hover:text-white transition">
                            <span class="text-base">📸</span>
                            <div>
                                <div class="font-bold">Instagram Oficial</div>
                                <div class="text-[10px] text-slate-400">@mscaribeatlantico</div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Botón rápido Agendar Cita en Taller -->
                <a href="{{ route('dashboard') }}#agendar-cita" 
                   class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-extrabold shadow-md shadow-caribe-red/30 transition">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>Agendar Cita</span>
                </a>

                <!-- Perfil Dropdown -->
                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center gap-3 px-3 py-1.5 rounded-xl border border-white/10 bg-white/5 hover:bg-white/10 text-white text-xs font-bold transition focus:outline-none cursor-pointer">
                            <div class="w-7 h-7 rounded-lg bg-caribe-red text-white flex items-center justify-center font-black text-xs shadow-xs">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <div class="text-left hidden lg:block">
                                <span class="block leading-tight text-white font-bold truncate max-w-[120px]">{{ Auth::user()->name }}</span>
                                <span class="block text-[10px] text-slate-400 font-medium">Cliente</span>
                            </div>
                            <svg class="w-4 h-4 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-3 border-b border-slate-100 bg-slate-50">
                            <p class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Conectado como</p>
                            <p class="text-sm font-bold text-slate-900 truncate">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-slate-500 truncate">{{ Auth::user()->email }}</p>
                        </div>

                        <x-dropdown-link :href="route('profile.edit')" class="flex items-center gap-2 text-xs font-medium text-slate-700 hover:text-caribe-blueNavy">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            {{ __('Mi Perfil y Datos') }}
                        </x-dropdown-link>

                        <x-dropdown-link :href="route('dashboard') . '#tarjeta-vida'" class="flex items-center gap-2 text-xs font-medium text-slate-700 hover:text-caribe-blueNavy">
                            <svg class="w-4 h-4 text-caribe-blueAtlantic" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            {{ __('Tarjeta de Vida Vehicular') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <div class="border-t border-slate-100 mt-1">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" 
                                                 onclick="event.preventDefault(); this.closest('form').submit();"
                                                 class="flex items-center gap-2 text-xs font-medium text-red-600 hover:text-red-700 hover:bg-red-50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    {{ __('Cerrar Sesión') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2.5 rounded-xl text-slate-300 hover:text-white hover:bg-white/10 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (Mobile) -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t border-slate-800 bg-[#07162C] text-white">
        <div class="pt-3 pb-4 space-y-2 px-6">
            <a href="{{ route('dashboard') }}" class="block py-2 text-sm font-bold {{ request()->routeIs('dashboard') ? 'text-caribe-red' : 'text-slate-300' }}">
                Panel & Métricas
            </a>
            <a href="{{ route('dashboard') }}#tarjeta-vida" class="block py-2 text-sm font-semibold text-slate-300">
                Tarjeta de Vida Vehicular
            </a>
            <a href="{{ route('dashboard') }}#agendar-cita" class="block py-2 text-sm font-bold text-caribe-red">
                📅 Agendar Cita en Taller
            </a>
            <a href="{{ url('/') }}" class="block py-2 text-sm font-semibold text-slate-400">
                Ver Portal Público del Recinto
            </a>
        </div>

        <div class="pt-4 pb-4 border-t border-slate-800 px-6 bg-[#050E1D]">
            <div class="font-bold text-sm text-white">{{ Auth::user()->name }}</div>
            <div class="font-medium text-xs text-slate-400">{{ Auth::user()->email }}</div>

            <div class="mt-4 space-y-2">
                <a href="{{ route('profile.edit') }}" class="block py-1.5 text-xs font-semibold text-slate-300">
                    Mi Perfil
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left py-1.5 text-xs font-semibold text-red-400">
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
