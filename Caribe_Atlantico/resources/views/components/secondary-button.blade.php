<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-2.5 bg-white border border-slate-300 rounded-lg font-semibold text-xs text-slate-700 tracking-wide uppercase shadow-sm hover:bg-slate-50 hover:border-slate-400 focus:outline-none focus:ring-2 focus:ring-caribe-blueAtlantic/30 focus:ring-offset-2 disabled:opacity-30 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
