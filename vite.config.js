import {defineConfig} from 'vite';
import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin';
// import usePHP from 'vite-plugin-php';


export default defineConfig({
    plugins: [
        tailwindcss(),
//        usePHP(),
        laravel({
            // ...
            input: './src/css/style.css',
            refresh: true,
        }),
    ],
})
