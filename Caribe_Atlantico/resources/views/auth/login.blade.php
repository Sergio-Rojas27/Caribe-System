<x-guest-layout>
    <!-- Encabezado del Formulario -->
    <div class="mb-6">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-caribe-red/20 border border-caribe-red/40 text-caribe-redLight text-[11px] font-bold tracking-wider uppercase mb-3">
            <span class="w-1.5 h-1.5 rounded-full bg-caribe-red"></span>
            Portal de Clientes
        </div>
        <h1 class="text-2xl font-black text-white tracking-tight">
            Iniciar Sesión
        </h1>
        <p class="mt-1 text-sm text-slate-300">
            Accede para consultar tu <span class="font-bold text-sky-400">Tarjeta de Vida Vehicular</span> y citas de taller.
        </p>
    </div>

    <!-- Estado de Sesión -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

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
                       autofocus 
                       autocomplete="username"
                       placeholder="tu-correo@ejemplo.com"
                       class="w-full pl-10 pr-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-sm text-white placeholder-slate-500 focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition-all outline-none" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <!-- Password -->
        <div>
            <div class="flex items-center justify-between mb-1.5">
                <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-300">
                    Contraseña
                </label>
                @if (Route::has('password.request'))
                    <a class="text-xs font-semibold text-sky-400 hover:text-sky-300 hover:underline transition-colors" href="{{ route('password.request') }}">
                        ¿Olvidaste tu clave?
                    </a>
                @endif
            </div>
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
                       autocomplete="current-password"
                       placeholder="••••••••"
                       class="w-full pl-10 pr-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-sm text-white placeholder-slate-500 focus:border-sky-400 focus:ring-1 focus:ring-sky-400 transition-all outline-none" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between pt-1">
            <label for="remember_me" class="inline-flex items-center cursor-pointer select-none">
                <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-slate-700 bg-slate-900 text-caribe-red focus:ring-caribe-red/30 cursor-pointer" name="remember">
                <span class="ms-2 text-xs font-medium text-slate-300">Mantener sesión iniciada</span>
            </label>
        </div>

        <!-- Submit Button -->
        <div class="pt-2">
            <button type="submit" class="w-full inline-flex items-center justify-center gap-2 py-3.5 px-5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white font-extrabold text-sm tracking-wide shadow-lg shadow-caribe-red/30 transition transform active:scale-[0.99] cursor-pointer">
                <span>Ingresar al Sistema</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>
    </form>

    <!-- Register Link -->
    <div class="mt-8 pt-6 border-t border-white/10 text-center">
        <p class="text-xs text-slate-400">
            ¿Primera vez en el taller o recinto de Caribe Atlántico?
        </p>
        <a href="{{ route('register') }}" class="mt-3 inline-flex items-center justify-center gap-2 w-full py-3 px-4 rounded-xl border border-white/15 bg-white/5 hover:bg-white/10 text-white font-bold text-xs tracking-wide transition shadow-sm">
            <span>Crear Cuenta y Activar Tarjeta Vehicular</span>
            <svg class="w-3.5 h-3.5 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
</x-guest-layout>
