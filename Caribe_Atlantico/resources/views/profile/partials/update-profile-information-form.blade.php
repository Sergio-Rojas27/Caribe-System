<section>
    <header class="mb-5">
        <div class="flex items-center gap-2 mb-1">
            <span class="w-7 h-7 rounded-lg bg-red-100 text-caribe-red flex items-center justify-center text-xs font-bold">👤</span>
            <h2 class="text-base font-black text-slate-900">
                Información Personal
            </h2>
        </div>
        <p class="text-xs text-slate-500">
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
            <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                Nombre y Apellido
            </label>
            <input id="name" 
                   name="name" 
                   type="text" 
                   class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" 
                   value="{{ old('name', $user->name) }}" 
                   required 
                   autofocus 
                   autocomplete="name" />
            <x-input-error class="mt-1 text-xs" :messages="$errors->get('name')" />
        </div>

        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                Correo Electrónico
            </label>
            <input id="email" 
                   name="email" 
                   type="email" 
                   class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" 
                   value="{{ old('email', $user->email) }}" 
                   required 
                   autocomplete="username" />
            <x-input-error class="mt-1 text-xs" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2 p-3 bg-amber-50 rounded-xl border border-amber-200">
                    <p class="text-xs text-amber-800">
                        Tu correo no está verificado.
                        <button form="send-verification" class="underline font-bold text-amber-900 hover:text-black">
                            Reenviar correo de verificación.
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-1 font-semibold text-xs text-emerald-600">
                            Se ha enviado un nuevo enlace de verificación a tu correo.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 pt-2">
            <button type="submit" class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white text-xs font-bold shadow-sm transition">
                <span>Guardar Cambios</span>
            </button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" 
                   x-show="show" 
                   x-transition 
                   x-init="setTimeout(() => show = false, 3000)" 
                   class="text-xs font-semibold text-emerald-600">
                    ✓ Cambios guardados exitosamente.
                </p>
            @endif
        </div>
    </form>
</section>
