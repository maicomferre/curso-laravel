import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
=======
import tailwindcss from '@tailwindcss/vite';
>>>>>>> origin/main

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
>>>>>>> origin/main
    ],
});
