import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            //input: ['resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'],
            input: ["resources/sass/app.scss", "ressources/sass/backend.scss", "resources/js/app.js"], // add scss file
           
            refresh: true,
        }),
    ],
});
