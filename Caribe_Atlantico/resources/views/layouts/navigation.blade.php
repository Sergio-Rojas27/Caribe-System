<nav x-data="{ open: false }" class="bg-white border-b border-slate-200/80 sticky top-0 z-40 shadow-xs">
    <!-- Línea sutil de colores de marca arriba -->
    <div class="h-1 w-full bg-gradient-to-r from-caribe-red via-caribe-blue to-caribe-blueAtlantic"></div>

    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center gap-6">
                <!-- Logo / Nombre -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 group">
                        <img src="{{ asset('images/Logo-Caribe-removebg-preview.png') }}" alt="Logo" class="h-10 w-auto object-contain transition-transform group-hover:scale-105">
                        <div class="flex flex-col">
                            <span class="text-sm font-extrabold text-caribe-blue tracking-tight leading-tight uppercase group-hover:text-caribe-red transition-colors">
                                Caribe Atlántico
                            </span>
                            <span class="text-[10px] font-bold text-caribe-red uppercase tracking-wider">
                                Sistema de Gestión Vehicular
                            </span>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex md:items-center md:space-x-2">
                    <a href="{{ route('dashboard') }}" 
                       class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-xs font-bold uppercase tracking-wider transition-all {{ request()->routeIs('dashboard') ? 'bg-caribe-blueLight/60 text-caribe-blueNavy border border-caribe-blueAtlantic/30' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                        <svg class="w-4 h-4 text-caribe-blueAtlantic" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        Panel & Métricas
                    </a>

                    <a href="{{ url('/') }}" 
                       class="inline-flex items-center gap-2 px-3 py-2 rounded-lg text-xs font-bold uppercase tracking-wider text-slate-600 hover:text-slate-900 hover:bg-slate-100 transition-all">
                        <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        El Recinto / Servicios
                    </a>
                </div>
            </div>

            <!-- Right Actions & Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:gap-3">
                <!-- Botón rápido Agendar Cita -->
                <a href="{{ route('dashboard') }}#agendar-cita" 
                   class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-lg bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold shadow-sm transition-all">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>Agendar Cita</span>
                </a>

                <x-dropdown align="right" width="56">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center gap-2.5 px-3 py-1.5 rounded-xl border border-slate-200 bg-slate-50 hover:bg-slate-100 text-slate-700 text-xs font-bold transition-all focus:outline-none">
                            <div class="w-7 h-7 rounded-lg bg-caribe-blueNavy text-white flex items-center justify-center font-black text-xs shadow-xs">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <div class="text-left hidden md:block">
                                <span class="block leading-tight text-slate-900 font-bold truncate max-w-[120px]">{{ Auth::user()->name }}</span>
                                <span class="block text-[10px] text-slate-500 font-medium">Cliente</span>
                            </div>
                            <svg class="w-4 h-4 text-slate-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-3 border-b border-slate-100 bg-slate-50/70">
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
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-slate-600 hover:text-caribe-red hover:bg-slate-100 focus:outline-none transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu (Mobile) -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden border-t border-slate-200 bg-white">
        <div class="pt-2 pb-3 space-y-1 px-4">
            <a href="{{ route('dashboard') }}" class="block py-2 text-sm font-bold {{ request()->routeIs('dashboard') ? 'text-caribe-red' : 'text-slate-700' }}">
                Panel Principal & Métricas
            </a>
            <a href="{{ url('/') }}" class="block py-2 text-sm font-medium text-slate-600">
                El Recinto / Servicios
            </a>
            <a href="{{ route('dashboard') }}#agendar-cita" class="block py-2 text-sm font-bold text-caribe-red">
                📅 Agendar Cita en Taller
            </a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-3 border-t border-slate-200 px-4 bg-slate-50">
            <div class="font-bold text-sm text-slate-800">{{ Auth::user()->name }}</div>
            <div class="font-medium text-xs text-slate-500">{{ Auth::user()->email }}</div>

            <div class="mt-3 space-y-1">
                <a href="{{ route('profile.edit') }}" class="block py-1.5 text-xs font-semibold text-slate-700">
                    Mi Perfil
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left py-1.5 text-xs font-semibold text-red-600">
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>
