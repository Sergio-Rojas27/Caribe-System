<section>
    <header class="mb-6">
        <div class="flex items-center gap-2 mb-1">
            <span class="w-8 h-8 rounded-xl bg-red-500/15 text-caribe-red flex items-center justify-center text-sm font-bold border border-red-500/30">👤</span>
            <h2 class="text-base font-black text-slate-900 dark:text-white">
                Información Personal
            </h2>
        </div>
        <p class="text-xs text-slate-500 dark:text-slate-400">
            Actualiza los datos de tu cuenta de conductor y tu dirección de correo de contacto.
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="space-y-4">
        @csrf
        @method('patch')

        <div>
            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                Nombre y Apellido
            </label>
            <input id="name" 
                   name="name" 
                   type="text" 
                   class="w-full text-xs font-semibold py-3 px-4 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white rounded-xl focus:border-caribe-blueAtlantic focus:ring-1 focus:ring-caribe-blueAtlantic outline-none transition-colors" 
                   value="{{ old('name', $user->name) }}" 
                   required 
                   autofocus 
                   autocomplete="name" />
            <x-input-error class="mt-1 text-xs" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">
                Correo Electrónico
            </label>
            <input id="email" 
                   name="email" 
                   type="email" 
                   class="w-full text-xs font-semibold py-3 px-4 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white rounded-xl focus:border-caribe-blueAtlantic focus:ring-1 focus:ring-caribe-blueAtlantic outline-none transition-colors" 
                   value="{{ old('email', $user->email) }}" 
                   required 
                   autocomplete="username" />
            <x-input-error class="mt-1 text-xs" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3 p-3 bg-amber-50 dark:bg-amber-950/60 rounded-xl border border-amber-200 dark:border-amber-500/40">
                    <p class="text-xs text-amber-800 dark:text-amber-200">
                        Tu correo no está verificado.
                        <button form="send-verification" class="underline font-bold text-amber-600 dark:text-amber-400 hover:text-caribe-red transition">
                            Reenviar correo de verificación.
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-1 font-semibold text-xs text-emerald-600 dark:text-emerald-400">
                            Se ha enviado un nuevo enlace de verificación a tu correo.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 pt-3">
            <button type="submit" class="inline-flex items-center gap-1.5 px-6 py-3 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-extrabold shadow-md shadow-caribe-red/30 transition cursor-pointer">
                <span>Guardar Cambios</span>
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" 
                   x-show="show" 
                   x-transition 
                   x-init="setTimeout(() => show = false, 3000)" 
                   class="text-xs font-semibold text-emerald-600 dark:text-emerald-400">
                    ✓ Guardado correctamente.
                </p>
            @endif
        </div>
    </form>
</section>