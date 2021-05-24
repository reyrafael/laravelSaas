const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                olive: {
                  '50':  '#faf9f4',
                  '100': '#f6f0c7',
                  '200': '#ebdf90',
                  '300': '#cfbc5b',
                  '400': '#8d8741',
                  '500': '#83751a',
                  '600': '#695c11',
                  '700': '#50450f',
                  '800': '#372f0d',
                  '900': '#241d0a',
                },
                sepia: {
                  '50':  '#fbfaf7',
                  '100': '#f9efd8',
                  '200': '#f2d8af',
                  '300': '#daad86',
                  '400': '#cb864f',
                  '500': '#b1652f',
                  '600': '#944a1f',
                  '700': '#71381a',
                  '800': '#4e2614',
                  '900': '#32180d',
                },
                
              }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
