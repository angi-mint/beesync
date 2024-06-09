import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                'primary': {
                    '300': '#F1BA4D',
                    '500': '#F5BB06',
                    '700': '#98591C',
                    '900': '#603205',

                },
                'dark': {
                    900: '#000814'
                },
            },
            fontFamily: {
                sans: ['Julius Sans One', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
