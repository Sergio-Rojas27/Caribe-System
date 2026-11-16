<section class="space-y-4">
    <header>
        <div class="flex items-center gap-2 mb-1">
            <span class="w-8 h-8 rounded-xl bg-red-500/15 text-red-600 dark:text-red-400 flex items-center justify-center text-sm font-bold border border-red-500/30">⚠️</span>
            <h2 class="text-base font-black text-slate-900 dark:text-white">
                Eliminar Cuenta
            </h2>
        </div>
        <p class="text-xs text-slate-600 dark:text-slate-300">
            Una vez eliminada la cuenta, se borrarán de forma permanente todos tus datos, citas y registros de la Tarjeta de Vida Vehicular.
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >Eliminar Cuenta Definitivamente</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-white dark:bg-[#0A192F] text-slate-800 dark:text-white">
            @csrf
            @method('delete')

            <h2 class="text-lg font-black text-slate-900 dark:text-white">
                ¿Estás completamente seguro de eliminar tu cuenta?
            </h2>

            <p class="mt-2 text-xs text-slate-600 dark:text-slate-300 leading-relaxed">
                Esta acción no se puede deshacer. Ingresa tu contraseña para confirmar la eliminación permanente de tus datos y vehículos vinculados.
            </p>

            <div class="mt-4">
                <input id="password"
                       name="password"
                       type="password"
                       class="w-full text-xs font-semibold py-3 px-4 bg-slate-50 dark:bg-slate-900 border border-slate-300 dark:border-slate-700 text-slate-900 dark:text-white rounded-xl focus:border-red-500 outline-none"
                       placeholder="Tu contraseña actual" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-1 text-xs" />
            </div>

            <div class="mt-6 flex justify-end gap-3">
                <x-secondary-button x-on:click="$dispatch('close')">
                    Cancelar
                </x-secondary-button>

                <x-danger-button>
                    Confirmar Eliminación
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>