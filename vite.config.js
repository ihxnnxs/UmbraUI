import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'workbench/resources/css/app.css',
                'workbench/resources/js/app.js'
            ],
            publicDirectory: 'vendor/orchestra/testbench-core/laravel/public',
            buildDirectory: 'build',
            hotFile: 'vendor/orchestra/testbench-core/laravel/public/hot',
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        hmr: {
            host: 'localhost',
        },
        watch: {
            ignored: [
                '**/vendor/**',
                '**/node_modules/**',
                '**/storage/**',
            ],
        },
    },
    build: {
        outDir: 'vendor/orchestra/testbench-core/laravel/public/build',
        manifest: true,
        rollupOptions: {
            input: [
                'workbench/resources/css/app.css',
                'workbench/resources/js/app.js'
            ],
        },
    },
});
