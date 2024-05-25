import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';  // Reactを使用している場合

export default defineConfig({
    server: {
        host: true,
        port: 5173,
        hmr: {
            host: 'localhost',  // Dockerを使用している場合は、ここをDockerホストのIPに変更
            port: 5173
        },
    },
    watch: {
        usePolling: true,
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.jsx'],  // app.jsからapp.jsxに変更している場合
            refresh: true,
        }),
        react(),  // Reactプラグインを使用している場合
    ],
});