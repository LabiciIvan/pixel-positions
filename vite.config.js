import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                'resources/views/**/*.blade.php',
                'app/**/*.php',
                'routes/**/*.php',
            ],
        }),
        tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',  // 👈 allow external access (from your host browser)
        port: 5173,       // 👈 standard Vite port
        hmr: {
            host: 'localhost', // 👈 ensures HMR still works
        },
        watch: {
            usePolling: true,  // 👈 this line is crucial inside Docker
            interval: 300,     // adjust as needed (lower = faster detection)
        },
    },
});
