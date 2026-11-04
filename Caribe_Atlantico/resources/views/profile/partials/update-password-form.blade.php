<section>
    <header class="mb-5">
        <div class="flex items-center gap-2 mb-1">
            <span class="w-7 h-7 rounded-lg bg-blue-100 text-caribe-blueNavy flex items-center justify-center text-xs font-bold">🔒</span>
            <h2 class="text-base font-black text-slate-900">
                Seguridad y Contraseña
            </h2>
        </div>
        <p class="text-xs text-slate-500">
            Asegúrate de que tu cuenta esté protegida con una contraseña segura.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-4">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                Contraseña Actual
            </label>
            <input id="update_password_current_password" 
                   name="current_password" 
                   type="password" 
                   class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" 
                   autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-1 text-xs" />
        </div>

        <div>
            <label for="update_password_password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                Nueva Contraseña
            </label>
            <input id="update_password_password" 
                   name="password" 
                   type="password" 
                   class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" 
                   autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-1 text-xs" />
        </div>

        <div>
            <label for="update_password_password_confirmation" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                Confirmar Nueva Contraseña
            </label>
            <input id="update_password_password_confirmation" 
                   name="password_confirmation" 
                   type="password" 
                   class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" 
                   autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-1 text-xs" />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit" class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-xl bg-caribe-blueNavy hover:bg-caribe-blue text-white text-xs font-bold shadow-sm transition">
                <span>Actualizar Contraseña</span>
            </button>

            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" 
                   x-show="show" 
                   x-transition 
                   x-init="setTimeout(() => show = false, 3000)" 
                   class="text-xs font-semibold text-emerald-600">
                    ✓ Contraseña actualizada correctamente.
                </p>
            @endif
        </div>
    </form>
</section>
