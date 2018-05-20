var gulp = require('gulp');
var elixir = require('laravel-elixir');
var imageOptimize = require('laravel-elixir-image-optimize');
var argv = require('yargs').argv;
var bin = require('./tasks/bin');

elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

elixir(function(mix) {
    var env = argv.e || argv.env || 'local';
    var port = argv.p || argv.port || 3000;

    // mix.imageOptimize('img','img/opt');

    mix.sass('main.scss')
        .exec(bin.path() + ' build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
        .copy('_redirects', './build_local/_redirects')
        .copy('_redirects', './build_production/_redirects');

        // .browserSync({
        //     port: port,
        //     server: { baseDir: 'build_' + env },
        //     proxy: null,
        //     files: [ 'build_' + env + '/**/*' ]
        //     // files: ['./source/**/*']
        // });

});
