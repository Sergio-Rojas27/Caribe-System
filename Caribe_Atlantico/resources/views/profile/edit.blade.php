<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-caribe-red via-caribe-darkRed to-caribe-blueDeep text-white flex items-center justify-center font-black text-2xl shadow-xl border-2 border-white/20">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div>
                    <div class="inline-flex items-center gap-1.5 px-3 py-0.5 rounded-full bg-caribe-blueAtlantic/20 border border-caribe-blueAtlantic/40 text-sky-300 text-[10px] font-bold tracking-wider uppercase mb-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
                        Cliente Verificado Caribe Atlántico
                    </div>
                    <h1 class="text-2xl font-black text-white tracking-tight">
                        {{ Auth::user()->name }}
                    </h1>
                    <p class="text-xs text-slate-300">
                        {{ Auth::user()->email }} • Miembro activo del recinto
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-white/10 hover:bg-white/20 border border-white/15 text-white text-xs font-bold transition">
                    <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Volver al Panel</span>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 space-y-8 sm:space-y-12">

            <!-- Fila 1: Información Personal y Contraseña -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Información del Perfil -->
                <div class="p-8 bg-gradient-to-br from-[#0A192F] to-[#0D223E] border border-slate-700/80 rounded-3xl shadow-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>

                <!-- Actualizar Contraseña -->
                <div class="p-8 bg-gradient-to-br from-[#0A192F] to-[#0D223E] border border-slate-700/80 rounded-3xl shadow-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Fila 2: Preferencias de Servicio & Zona de Peligro -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Preferencias de Alertas de Mantenimiento Preventivo -->
                <div class="p-8 bg-gradient-to-br from-[#0A192F] to-[#0D223E] border border-slate-700/80 rounded-3xl shadow-xl flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <span class="w-8 h-8 rounded-xl bg-sky-500/20 text-sky-400 flex items-center justify-center text-sm font-bold border border-sky-500/30">🔔</span>
                            <h3 class="text-base font-black text-white">Alertas de Mantenimiento Preventivo</h3>
                        </div>
                        <p class="text-xs text-slate-400 mb-6">
                            Configura cómo deseas que el taller te notifique sobre próximos cambios de aceite, pastillas de freno e inspecciones preventivas.
                        </p>

                        <div class="space-y-3">
                            <label class="flex items-center justify-between p-3.5 rounded-xl border border-white/10 bg-white/5 cursor-pointer hover:bg-white/10 transition">
                                <span class="text-xs font-semibold text-slate-200">Recordatorio de cambio de aceite (500 km antes)</span>
                                <input type="checkbox" checked class="w-4 h-4 rounded text-caribe-red focus:ring-caribe-red/30 cursor-pointer">
                            </label>

                            <label class="flex items-center justify-between p-3.5 rounded-xl border border-white/10 bg-white/5 cursor-pointer hover:bg-white/10 transition">
                                <span class="text-xs font-semibold text-slate-200">Alertas de rotación de neumáticos y balanceo</span>
                                <input type="checkbox" checked class="w-4 h-4 rounded text-caribe-red focus:ring-caribe-red/30 cursor-pointer">
                            </label>

                            <label class="flex items-center justify-between p-3.5 rounded-xl border border-white/10 bg-white/5 cursor-pointer hover:bg-white/10 transition">
                                <span class="text-xs font-semibold text-slate-200">Notificaciones de promociones en lubricantes y filtros</span>
                                <input type="checkbox" checked class="w-4 h-4 rounded text-caribe-red focus:ring-caribe-red/30 cursor-pointer">
                            </label>
                        </div>
                    </div>

                    <div class="mt-8 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-slate-400">
                        <span>Canales activos: Correo y WhatsApp</span>
                        <span class="text-emerald-400 font-bold">● Activado</span>
                    </div>
                </div>

                <!-- Eliminar Cuenta -->
                <div class="p-8 bg-gradient-to-br from-[#2D0B0E]/60 to-[#0A192F] border border-red-500/30 rounded-3xl shadow-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
