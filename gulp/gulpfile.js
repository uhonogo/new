'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    rimraf = require('rimraf'),
    browserSync = require("browser-sync"),
    reload = browserSync.reload;

var path = {
    build: {
        js: '../js/',
        css: '../css/',
        img: '../img/'
    },
    src: {
        js: '../js/*.js',
        style: '../sass/*.sass',
        img: '../img/**/*.*'
    },
    watch: {
        js: '../js/**/*.js',
        style: '../sass/**/*.sass',
        img: '../img/**/*.*'
    },
    clean: '../'
};

gulp.task('webserver', function () {
    var files = [
        '../*.css',
        '../css/*.css',
        '../*.php',
        '../inc/**/*.php',
        '../framework-customizations/**/*.php',
        '../ultimate-member/**/*.php',
        '../template-parts/**/*.php',
        '../template-parts/*.php',
        '../*.js',
        '../js/*.js'
    ];
    browserSync.init(files, {
        tunnel: true,
        proxy : 'http://jandy.com/',
        port: 8080,
        logPrefix: "Frontend_Devil",
        open: true,
        ghostMode : false,
        notify: false
    });
});

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('style:build', function()
{
  gulp.src(path.src.style)
    .pipe( sass().on( 'error', function( error )
      {
        console.log( error );
      } )
    )
    .pipe(prefixer())
    .pipe(cssmin())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(path.build.css))
    .pipe(reload({stream: true}));
});

gulp.task('build', [
    'style:build'
]);

gulp.task('pages:dev', function() {
  gulp.src(config.src)
    .pipe(plumber({
      errorHandler: errorHandler
    }))
    .pipe(jade(config.settings))
    .pipe(gulp.dest(config.dest))
    .on('end', browserSync.reload);
});

gulp.task('watch', function(){
    watch([path.watch.style], {readDelay: 100}, function(event, cb) {
        gulp.start('style:build');
    });
});

gulp.task('default', ['build', 'webserver', 'watch']);