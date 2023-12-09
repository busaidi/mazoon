import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    css: {
        sourceMap: true, // Enable source maps for CSS
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // LTR styles
                'resources/css/app.rtl.css', // RTL styles
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
