import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        fontSize: {
          xs: ['12px', '16px'],
          sm: ['14px', '20px'],
          base: ['16px', '19.5px'],
          lg: ['18px', '21.94px'],
          xl: ['20px', '24.38px'],
          '2xl': ['24px', '29.26px'],
          '3xl': ['28px', '50px'],
          '4xl': ['48px', '58px'],
          '5xl': '3.5rem', // Override the default 5xl size (originally 3rem)
          '6xl': '4rem', // Add a new custom size
          '7xl': '5rem', // Add another custom size
          '8xl': ['96px', '106px']
        },
        extend: {
          fontFamily: {
            'body': [
    'Inter', 
    'ui-sans-serif', 
    'system-ui', 
    '-apple-system', 
    'system-ui', 
    'Segoe UI', 
    'Roboto', 
    'Helvetica Neue', 
    'Arial', 
    'Noto Sans', 
    'sans-serif', 
    'Apple Color Emoji', 
    'Segoe UI Emoji', 
    'Segoe UI Symbol', 
    'Noto Color Emoji'
  ],
  
            palanquin: ['Palanquin', 'sans-serif'],
            montserrat: ['Montserrat', 'sans-serif'],
          },
          colors: {
            'primary': "#ECEEFF",
            "coral-red": "#FF6452",
            'custom-color': '#f7b50',
            "slate-gray": "#6D6D6D",
            "pale-blue": "#F5F6FF",
            "white-400": "rgba(255, 255, 255, 0.80)",
            "50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"
          },
          boxShadow: {
            '3xl': '0 10px 40px rgba(0, 0, 0, 0.1)'
          },
          backgroundImage: {
            'hero': "url('assets/images/collection-background.svg')",
            'card': "url('assets/images/thumbnail-background.svg')",
          },
          screens: {
            "wide": "1440px"
          }
        },
    },

    plugins: [forms,require('flowbite/plugin')],
};
