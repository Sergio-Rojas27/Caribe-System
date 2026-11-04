<x-guest-layout>
    <!-- Encabezado del Formulario -->
    <div class="mb-6">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-caribe-blueAtlantic/20 border border-caribe-blueAtlantic/40 text-sky-300 text-[11px] font-bold tracking-wider uppercase mb-3">
            <span class="w-1.5 h-1.5 rounded-full bg-sky-400"></span>
            Registro de Conductores
        </div>
        <h1 class="text-2xl font-black text-white tracking-tight">
            Crea tu Cuenta
        </h1>
        <p class="mt-1 text-sm text-slate-300">
            Digitaliza el cuidado de tu auto y activa tu <span class="font-bold text-caribe-redLight">Tarjeta de Vida Vehicular</span>.
        </p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1.5">
                Nombre y Apellido
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>
                <input id="name" 
                       type="text" 
                       name="name" 
                       value="{{ old('name') }}" 
                       required 
                       autofocus 
                       autocomplete="name"
                       placeholder="Ej. Carlos Mendoza"
                       class="w-full pl-10 pr-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-sm text-white placeholder-slate-500 focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition-all outline-none" />
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-1.5" />
        </div>

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1.5">
                Correo Electrónico
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </div>
                <input id="email" 
                       type="email" 
                       name="email" 
                       value="{{ old('email') }}" 
                       required 
                       autocomplete="username"
                       placeholder="carlos@ejemplo.com"
                       class="w-full pl-10 pr-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-sm text-white placeholder-slate-500 focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition-all outline-none" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <!-- Password Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
            <div>
                <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1.5">
                    Contraseña
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <input id="password" 
                           type="password" 
                           name="password" 
                           required 
                           autocomplete="new-password"
                           placeholder="••••••••"
                           class="w-full pl-10 pr-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-sm text-white placeholder-slate-500 focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition-all outline-none" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
            </div>

            <div>
                <label for="password_confirmation" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1.5">
                    Confirmar Clave
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-500">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <input id="password_confirmation" 
                           type="password" 
                           name="password_confirmation" 
                           required 
                           autocomplete="new-password"
                           placeholder="••••••••"
                           class="w-full pl-10 pr-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-sm text-white placeholder-slate-500 focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition-all outline-none" />
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
            </div>
        </div>

        <div class="p-3 bg-white/5 border border-white/10 rounded-xl text-xs text-slate-300 flex items-center gap-2.5">
            <svg class="w-4 h-4 text-emerald-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
            <span>Incluye activación gratuita de alertas preventivas y turno express.</span>
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="w-full inline-flex items-center justify-center gap-2 py-3.5 px-5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white font-extrabold text-sm tracking-wide shadow-lg shadow-caribe-red/30 transition transform active:scale-[0.99] cursor-pointer">
                <span>Registrarme y Obtener Tarjeta</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>
    </form>

    <!-- Login Link -->
    <div class="mt-8 pt-6 border-t border-white/10 text-center">
        <p class="text-xs text-slate-400">
            ¿Ya tienes una cuenta registrada en Caribe Atlántico?
        </p>
        <a href="{{ route('login') }}" class="mt-3 inline-flex items-center justify-center gap-2 w-full py-3 px-4 rounded-xl border border-white/15 bg-white/5 hover:bg-white/10 text-white font-bold text-xs tracking-wide transition shadow-sm">
            <span>Iniciar Sesión en mi Cuenta</span>
            <svg class="w-3.5 h-3.5 text-caribe-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14" />
            </svg>
        </a>
    </div>
</x-guest-layout>
