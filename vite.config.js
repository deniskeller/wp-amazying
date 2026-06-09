import path from 'path';
import { defineConfig } from 'vite';

export default defineConfig({
  resolve: {
    alias: {
      '@': path.resolve(__dirname, './src')
    }
  },
  build: {
    manifest: true,
    rollupOptions: {
      input: {
        main: 'src/js/main.js'
      }
    },
    outDir: 'dist',
    emptyOutDir: true
  },
  server: {
    cors: true,
    strictPort: true,
    port: 5173
  },
  css: {
    preprocessorOptions: {
      scss: {
        api: 'modern-compiler',
        additionalData: `@use "@/styles/env.scss" as *;`
      }
    }
  }
});
