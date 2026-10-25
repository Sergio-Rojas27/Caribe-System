import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // Al no activar la clase 'dark' en el HTML, ignorará todas las reglas oscuras
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Color rojo institucional para las barras
                caribe: {
                    red: '#D32F2F',      // Rojo principal
                    darkRed: '#B71C1C',  // Rojo oscuro para hover/activos
                },
            },
        },
    },

    plugins: [forms],
};
