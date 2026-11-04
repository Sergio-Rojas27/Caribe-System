@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-slate-300 bg-white text-slate-800 placeholder-slate-400 focus:border-caribe-blueAtlantic focus:ring-2 focus:ring-caribe-blueAtlantic/20 rounded-lg shadow-sm transition text-sm']) }}>
