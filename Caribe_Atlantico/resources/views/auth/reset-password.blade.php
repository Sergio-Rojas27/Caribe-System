<x-guest-layout>
    <div class="mb-6">
        <div class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-caribe-blueLight text-caribe-blueNavy text-[11px] font-bold tracking-wider uppercase mb-3">
            <span class="w-1.5 h-1.5 rounded-full bg-caribe-blueAtlantic"></span>
            Seguridad
        </div>
        <h1 class="text-2xl font-black text-slate-900 tracking-tight">
            Restablecer Contraseña
        </h1>
        <p class="mt-1 text-sm text-slate-500">
            Define una nueva clave de acceso para tu cuenta en Caribe Atlántico.
        </p>
    </div>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-4">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                Correo Electrónico
            </label>
            <input id="email" 
                   type="email" 
                   name="email" 
                   value="{{ old('email', $request->email) }}" 
                   required 
                   autofocus 
                   autocomplete="username"
                   class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" />
            <x-input-error :messages="$errors->get('email')" class="mt-1.5" />
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                Nueva Contraseña
            </label>
            <input id="password" 
                   type="password" 
                   name="password" 
                   required 
                   autocomplete="new-password"
                   placeholder="••••••••"
                   class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" />
            <x-input-error :messages="$errors->get('password')" class="mt-1.5" />
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-1.5">
                Confirmar Nueva Contraseña
            </label>
            <input id="password_confirmation" 
                   type="password" 
                   name="password_confirmation" 
                   required 
                   autocomplete="new-password"
                   placeholder="••••••••"
                   class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 outline-none" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5" />
        </div>

        <div class="pt-2">
            <button type="submit" class="w-full inline-flex items-center justify-center gap-2 py-3 px-5 rounded-xl bg-caribe-red hover:bg-caribe-darkRed text-white font-bold text-sm tracking-wide shadow-md shadow-caribe-red/20 transition cursor-pointer">
                <span>Guardar Nueva Contraseña</span>
            </button>
        </div>
    </form>
</x-guest-layout>
