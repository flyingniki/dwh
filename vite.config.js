import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
  css: {
    preprocessorOptions: {
      sass: {
        silenceDeprecations: ["import", "call-string"],
      },
    },
  },
  plugins: [
    vue(),
    laravel({
      input: [
        "resources/sass/app.sass",
        "resources/js/app.js",
        "resources/js/popup.js",
      ],
      refresh: true,
    }),
  ],
});
