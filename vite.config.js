import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  css: {
    preprocessorOptions: {
      sass: {
        silenceDeprecations: ["import", "call-string"],
      },
    },
  },
  plugins: [
    laravel({
      input: [
        "resources/sass/app.sass",
        "resources/js/app.js",
        "resources/js/create.js",
        "resources/js/update.js",
      ],
      refresh: true,
    }),
  ],
});
