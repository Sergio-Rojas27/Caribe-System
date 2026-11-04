<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-caribe-blueDeep to-caribe-blueNavy text-white flex items-center justify-center font-black text-xl shadow-md border-2 border-white">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                </div>
                <div>
                    <div class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-full bg-caribe-blueLight text-caribe-blueNavy text-[10px] font-bold tracking-wider uppercase mb-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-caribe-blueAtlantic"></span>
                        Cliente Verificado Caribe Atlántico
                    </div>
                    <h1 class="text-2xl font-black text-slate-900 tracking-tight">
                        {{ Auth::user()->name }}
                    </h1>
                    <p class="text-xs text-slate-500">
                        {{ Auth::user()->email }} • Miembro registrado
                    </p>
                </div>
            </div>

            <div class="flex items-center gap-2">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 text-slate-700 text-xs font-bold transition shadow-2xs">
                    <svg class="w-4 h-4 text-caribe-blueAtlantic" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    <span>Volver al Panel</span>
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">

            <!-- Fila 1: Información Personal y Contraseña -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Información del Perfil -->
                <div class="p-6 sm:p-8 bg-white border border-slate-200/90 rounded-3xl shadow-xs">
                    @include('profile.partials.update-profile-information-form')
                </div>

                <!-- Actualizar Contraseña -->
                <div class="p-6 sm:p-8 bg-white border border-slate-200/90 rounded-3xl shadow-xs">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <!-- Fila 2: Preferencias de Servicio & Zona de Peligro -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Preferencias de Alertas de Mantenimiento Preventivo -->
                <div class="p-6 sm:p-8 bg-white border border-slate-200/90 rounded-3xl shadow-xs flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-7 h-7 rounded-lg bg-sky-100 text-caribe-blueAtlantic flex items-center justify-center text-xs font-bold">🔔</span>
                            <h3 class="text-base font-black text-slate-900">Alertas de Mantenimiento Preventivo</h3>
                        </div>
                        <p class="text-xs text-slate-500 mb-6">
                            Configura cómo deseas que el taller te notifique sobre próximos cambios de aceite, pastillas de freno e inspecciones preventivas.
                        </p>

                        <div class="space-y-4">
                            <label class="flex items-center justify-between p-3 rounded-xl border border-slate-200 bg-slate-50/60 cursor-pointer">
                                <span class="text-xs font-semibold text-slate-800">Recordatorio de cambio de aceite (500 km antes)</span>
                                <input type="checkbox" checked class="w-4 h-4 rounded text-caribe-red focus:ring-caribe-red/30 cursor-pointer">
                            </label>

                            <label class="flex items-center justify-between p-3 rounded-xl border border-slate-200 bg-slate-50/60 cursor-pointer">
                                <span class="text-xs font-semibold text-slate-800">Alertas de rotación de neumáticos y alineación</span>
                                <input type="checkbox" checked class="w-4 h-4 rounded text-caribe-red focus:ring-caribe-red/30 cursor-pointer">
                            </label>

                            <label class="flex items-center justify-between p-3 rounded-xl border border-slate-200 bg-slate-50/60 cursor-pointer">
                                <span class="text-xs font-semibold text-slate-800">Notificaciones de promociones en lubricantes y repuestos</span>
                                <input type="checkbox" checked class="w-4 h-4 rounded text-caribe-red focus:ring-caribe-red/30 cursor-pointer">
                            </label>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500">
                        <span>Canales activos: Correo y WhatsApp</span>
                        <span class="text-emerald-600 font-bold">● Activado</span>
                    </div>
                </div>

                <!-- Eliminar Cuenta -->
                <div class="p-6 sm:p-8 bg-white border border-red-100 rounded-3xl shadow-xs">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
