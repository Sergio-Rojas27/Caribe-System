<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-5 py-2.5 bg-caribe-red hover:bg-caribe-darkRed active:bg-caribe-red800 text-white font-semibold text-sm rounded-lg shadow-sm hover:shadow focus:outline-none focus:ring-2 focus:ring-caribe-red focus:ring-offset-2 transition-all duration-150']) }}>
    {{ $slot }}
</button>
