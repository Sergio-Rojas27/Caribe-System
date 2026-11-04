<section class="space-y-4">
    <header>
        <div class="flex items-center gap-2 mb-1">
            <span class="w-7 h-7 rounded-lg bg-red-100 text-red-600 flex items-center justify-center text-xs font-bold">⚠️</span>
            <h2 class="text-base font-black text-slate-900">
                Eliminar Cuenta
            </h2>
        </div>
        <p class="text-xs text-slate-500">
            Una vez eliminada la cuenta, se borrarán de forma permanente todos tus datos, citas y registros de la Tarjeta de Vida Vehicular.
        </p>
    </header>

    <x-danger-button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
    >Eliminar Cuenta Definitivamente</x-danger-button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-black text-slate-900">
                ¿Estás completamente seguro de eliminar tu cuenta?
            </h2>

            <p class="mt-2 text-xs text-slate-600 leading-relaxed">
                Esta acción no se puede deshacer. Ingresa tu contraseña para confirmar la eliminación permanente de tus datos y vehículos vinculados.
            </p>

            <div class="mt-4">
                <input id="password"
                       name="password"
                       type="password"
                       class="w-full text-xs font-semibold py-2.5 px-3 bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:border-red-500 focus:ring-2 focus:ring-red-200 outline-none"
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
