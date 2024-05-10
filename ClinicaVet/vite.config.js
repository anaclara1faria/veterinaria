import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/estilo-clinica-vet.css', 'resources/css/nova-categoria.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
