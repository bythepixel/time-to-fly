const mix = require('laravel-mix'),
      path = require('path');

const assetsDir = path.resolve(__dirname, 'resources/assets'),
      publicDir = path.resolve(__dirname, 'public');

mix.js(`${assetsDir}/js/app.js`, `${publicDir}/js`)
   .extract(['vue']);

mix.sass(`${assetsDir}/sass/app.scss`, `${publicDir}/css`);

if (mix.inProduction()) {
    mix.version();
}

mix.browserSync({
  proxy: 'localhost:8080',
  ui: false
});

mix.disableNotifications();
