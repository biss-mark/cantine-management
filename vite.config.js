import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'; // 1. Importe Tailwind ici

export default defineConfig({
    plugins: [
        tailwindcss(), // 2. Ajoute la fonction ici (AVANT le plugin laravel)
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});