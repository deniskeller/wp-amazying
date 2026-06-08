import { defineConfig } from 'vite';

export default defineConfig({
  build: {
    manifest: true,
    rollupOptions: {
      input: {
        main: 'src/js/main.js',
        investor: 'src/styles/style_investor.scss'
      }
    },
    outDir: 'dist',
    emptyOutDir: true
  },
  server: {
    cors: true,
    strictPort: true,
    port: 5173
  }
});
