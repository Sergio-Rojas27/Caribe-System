<x-guest-layout>
    <div class="mb-6">
        <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-caribe-blueAtlantic/15 border border-caribe-blueAtlantic/30 text-caribe-blueAtlantic dark:text-sky-300 text-[11px] font-bold tracking-wider uppercase mb-3">
            <span class="w-1.5 h-1.5 rounded-full bg-caribe-blueAtlantic"></span>
            Recuperación de Cuenta
        </div>
        <h1 class="text-2xl font-black text-slate-900 dark:text-white tracking-tight">
            ¿Olvidaste tu contraseña?
        </h1>
        <p class="mt-1 text-sm text-slate-600 dark:text-slate-300">
            Indica tu correo electrónico y te enviaremos un enlace seguro para restablecerla.
        </p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-1.5">
                Correo Electrónico
            </label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400 dark:text-slate-500">
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
                       placeholder="tu-correo@ejemplo.com"
                       class="w-full pl-10 pr-4 py-3 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 rounded-xl text-sm text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 focus:border-caribe-blueAtlantic focus:ring-1 focus:ring-caribe-blueAtlantic transition-all outline-none" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full inline-flex items-center justify-center gap-2 py-3.5 px-5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white font-extrabold text-sm tracking-wide shadow-lg shadow-caribe-red/30 transition cursor-pointer">
                <span>Enviar Enlace de Recuperación</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </div>

        <div class="text-center pt-4">
            <a href="{{ route('login') }}" class="text-xs font-semibold text-slate-500 hover:text-slate-800 dark:text-slate-400 dark:hover:text-white transition">
                ← Volver al inicio de sesión
            </a>
        </div>
    </form>
</x-guest-layout>