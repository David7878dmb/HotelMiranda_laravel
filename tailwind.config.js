import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/components/table.blade.php',
    ],
    safelist: [
        'bg-red-500',
        'text-gray-700',
        'hover:bg-gray-100',
        'dark:bg-gray-800',
        'dark:hover:bg-gray-700',
      ],

    theme: {
        extend: {
            colors:{
                colorfondo:'#342F2E',
                colortexto:'#C1A079',
                colorfondotabla:'#563B3A',
                colortextotabla: '#261611'
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};


