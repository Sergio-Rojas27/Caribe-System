<section>
    <header class="mb-6">
        <div class="flex items-center gap-2 mb-1">
            <span class="w-8 h-8 rounded-xl bg-sky-500/15 text-caribe-blueAtlantic dark:text-sky-400 flex items-center justify-center text-sm font-bold border border-sky-500/30">🔒</span>
            <h2 class="text-base font-black text-slate-900 dark:text-white">
                Seguridad y Contraseña
            </h2>
        </div>
        <p class="text-xs text-slate-500 dark:text-slate-400">
            Asegúrate de que tu cuenta esté protegida con una contraseña segura.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                Contraseña Actual
            </label>
            <input id="update_password_current_password" 
                   name="current_password" 
                   type="password" 
                   class="w-full text-xs font-semibold py-3 px-4 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white rounded-xl focus:border-caribe-blueAtlantic focus:ring-1 focus:ring-caribe-blueAtlantic outline-none transition-colors" 
                   autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-1 text-xs" />
        </div>

        <div>
            <label for="update_password_password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                Nueva Contraseña
            </label>
            <input id="update_password_password" 
                   name="password" 
                   type="password" 
                   class="w-full text-xs font-semibold py-3 px-4 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white rounded-xl focus:border-caribe-blueAtlantic focus:ring-1 focus:ring-caribe-blueAtlantic outline-none transition-colors" 
                   autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-1 text-xs" />
        </div>

        <div>
            <label for="update_password_password_confirmation" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                Confirmar Nueva Contraseña
            </label>
            <input id="update_password_password_confirmation" 
                   name="password_confirmation" 
                   type="password" 
                   class="w-full text-xs font-semibold py-3 px-4 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white rounded-xl focus:border-caribe-blueAtlantic focus:ring-1 focus:ring-caribe-blueAtlantic outline-none transition-colors" 
                   autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-1 text-xs" />
        </div>

        <div class="flex items-center gap-4 pt-3">
            <button type="submit" class="inline-flex items-center gap-1.5 px-6 py-3 rounded-xl bg-caribe-blueAtlantic hover:bg-sky-600 text-white text-xs font-extrabold shadow-md shadow-sky-500/20 transition cursor-pointer">
                <span>Actualizar Contraseña</span>
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" 
                   x-show="show" 
                   x-transition 
                   x-init="setTimeout(() => show = false, 3000)" 
                   class="text-xs font-semibold text-emerald-600 dark:text-emerald-400">
                    ✓ Contraseña actualizada correctamente.
                </p>
            @endif
        </div>
    </form>
</section>