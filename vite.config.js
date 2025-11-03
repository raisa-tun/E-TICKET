import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            publicDirectory: 'public_html',  // <-- add this
            buildDirectory: 'build',         // keeps build/ inside public_html
            refresh: true,
        }),
    ],
});
