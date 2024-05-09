import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    // gốc
    plugins: [
        laravel({
            // input: ['resources/css/app.css', 'resources/js/app.js'],
            input: ['resources/sass/main.scss', 'resources/js/oneui/app.js'],
            refresh: true,
        }),
    ],

    // mới thêm
    // plugins: [
    //     laravel([
    //         'resources/css/app.css',
    //         'resources/js/app.js',
    //     ]),
    // ],
});
