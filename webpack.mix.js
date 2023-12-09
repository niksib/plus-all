const mix = require('laravel-mix');
const fs = require("fs");

require('laravel-mix-criticalcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

let getFiles = function (dir) {
    // get all 'files' in this directory
    // filter directories
    return fs.readdirSync(dir).filter(file => {
        return fs.statSync(`${dir}/${file}`).isFile();
    });
};

getFiles('resources/js/App/pages').forEach(function (filepath) {
    mix.js('resources/js/App/pages/' + filepath, 'public/app/js/pages/');
});
getFiles('resources/scss/app/pages').forEach(function (filepath) {
    mix.sass('resources/scss/app/pages/' + filepath, 'public/app/css/pages');
});
getFiles('resources/scss/app/critical').forEach(function (filepath) {
    mix.sass('resources/scss/app/critical/' + filepath, 'public/app/css/critical');
});

mix.js('resources/js/App/app.js', 'public/app/js')
    .js('resources/js/Admin/app.js', 'public/admin/js')
    .vue()
    .sass('resources/scss/app/app.scss', 'public/app/css')
    .postCss('resources/css/admin/app.css', 'public/admin/css', [require('tailwindcss'), require('autoprefixer')])
    .alias({
        '@': 'resources/js',
    }).criticalCss({
    enabled: false,
    paths: {
        base: 'https://dev.meestposhta.com.ua',
        templates: './public/app/critical/', //Where css files need to be written, all these paths are relative to /public
                                     //So the example path here will be public/css/critical
        suffix: '.min'
    },
    urls: [
        { url: '/', template: 'home' },
        { url: '/receive', template: 'receive'},
        { url: '/payment-instruction', template: 'payment-instruction'},
        { url: '/tariffs', template: 'tariffs'},
        { url: '/faq', template: 'faq'},
        { url: '/shipments/international', template: 'shipments'},
        { url: '/about', template: 'about'},
        { url: '/news', template: 'news'},
        { url: '/news/promokodi-meest-poshta-uzhe-v-dostupi', template: 'news-item'},
        { url: '/contact-us', template: 'contact'},
        { url: '/offices', template: 'offices'}
    ],
    //Now using https://github.com/addyosmani/critical v4.0.1
    options: {
        //It's important to note here you should NOT set inline:true, this will break the whole system.
        width: 425,
        height: 823,
        penthouse:{
            timeout: 1200000
        }
    },
});

if (mix.inProduction()) {
    mix.version();
}
