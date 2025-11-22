const mix = require("laravel-mix");
require("laravel-mix-clean");

mix
  .setPublicPath("dist")
  .js("assets/js/main.js", "js")
  .sass("assets/scss/main.scss", "css")
  .options({ processCssUrls: false });

mix.copyDirectory("assets/images", "dist/images");

if (mix.inProduction()) {
  mix.clean();
}

mix.sourceMaps().version();
