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
                // Paleta corporativa Multiservicios Caribe Atlántico
                caribe: {
                    // Rojos de marca
                    red: '#D32F2F',          // Rojo primario institucional
                    darkRed: '#B71C1C',      // Rojo oscuro para hover/activos
                    lightRed: '#FEE2E2',     // Rojo suave para alertas/fondos
                    red50: '#FEF2F2',
                    red100: '#FEE2E2',
                    red500: '#EF4444',
                    red600: '#DC2626',
                    red700: '#B91C1C',
                    red800: '#991B1B',
                    red900: '#7F1D1D',

                    // Tonos de Azules (Atlántico / Marítimo)
                    blue: '#0B2545',         // Azul marino profundo de cabecera
                    blueDeep: '#07162C',     // Azul noche oscuro
                    blueNavy: '#133E6E',     // Azul marino clásico intermedio
                    blueAtlantic: '#0284C7', // Azul atlántico luminoso
                    blueCobalt: '#1D4ED8',   // Azul cobalto
                    blueLight: '#E0F2FE',    // Azul suave para badges/fondos
                    blueSoft: '#F0F7FF',     // Fondo neutro azulado
                    blue50: '#F0F9FF',
                    blue100: '#E0F2FE',
                    blue500: '#0EA5E9',
                    blue600: '#0284C7',
                    blue700: '#0369A1',
                    blue800: '#075985',
                    blue900: '#0C4A6E',

                    // Grises limpios minimalistas
                    slate50: '#F8FAFC',
                    slate100: '#F1F5F9',
                    slate200: '#E2E8F0',
                    slate600: '#475569',
                    slate800: '#1E293B',
                    slate900: '#0F172A',
                },
            },
            boxShadow: {
                'caribe': '0 10px 25px -5px rgba(211, 47, 47, 0.15), 0 8px 10px -6px rgba(11, 37, 69, 0.1)',
                'caribe-blue': '0 10px 25px -5px rgba(2, 132, 199, 0.2), 0 8px 10px -6px rgba(11, 37, 69, 0.1)',
            }
        },
    },

    plugins: [forms],
};

