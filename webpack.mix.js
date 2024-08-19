const mix = require('laravel-mix');
require('dotenv').config();

// JS
mix.combine([
    'src/js/libs/*.js',
    'src/js/main.js'
], 'assets/js/app.min.js');

// Sass
mix.sass('src/styles/main.scss', 'assets/css/app.css').options({
    processCssUrls: false
});

// Imagens e fontes
mix.copy('src/images', 'assets/images');
mix.copy('src/fonts', 'assets/fonts');

// BrowserSync
if (process.env.PROXY_URL) {
    mix.browserSync({
        proxy: process.env.PROXY_URL,
        ui: false,
        files: [
            './assets/**/*',
            './views/*.twig',
            './**/*.php',
        ]
    });
}

// Disable notifications
mix.disableNotifications();
