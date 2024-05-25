import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: true,
        port: 5173,
        hmr: { 
            host: 'localhost',
            port: 5173
        },
        
    },
     // CSSの自動反映がならない場合追加(Dockerだと多少時差がでるかも)
     watch: {
        usePolling: true,
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
