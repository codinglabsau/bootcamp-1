const mix = require('laravel-mix')
const tailwindcss = require('tailwindcss')

// compile sass
mix.sass('resources/sass/app.scss', 'public/assets/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')]
    })