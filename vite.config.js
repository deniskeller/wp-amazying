import path from 'path';
import { defineConfig } from 'vite';
import { createSvgIconsPlugin } from 'vite-plugin-svg-icons';

export default defineConfig({
  plugins: [
    createSvgIconsPlugin({
      iconDirs: [path.resolve(process.cwd(), 'src/assets/images/icons')],
      symbolId: 'icon-[name]'
    })
  ],
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
        additionalData: `@use "@/assets/scss/env.scss" as *;`
      }
    }
  }
});
