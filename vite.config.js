import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',

                'resources/css/app.css',
                'resources/css/temporalView.css'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
