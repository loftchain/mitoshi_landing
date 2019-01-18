'use strict';

var gulp = require('gulp');
var less = require('gulp-less');
var plumber = require('gulp-plumber');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var server = require('browser-sync').create();
var minify = require('gulp-csso');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var webp = require('gulp-webp');
var svgstore = require('gulp-svgstore');
var posthtml = require('gulp-posthtml');
var include = require('posthtml-include');
var run = require('run-sequence');
var del = require('del');


gulp.task('images', function () {
  return gulp.src('images/**/*.{png,jpg,svg}')
    .pipe(imagemin([
      imagemin.optipng({optimizationLevel: 3}),
      imagemin.jpegtran({progressive: true}),
      imagemin.svgo()
    ]))
    .pipe(gulp.dest('images'));
});

gulp.task('webp', function () {
  return gulp.src('images/**/*.{png,jpg}')
    .pipe(webp({quality: 75}))
    .pipe(gulp.dest('images'));
});

gulp.task('style', function () {
  gulp.src('less/style.less')
    .pipe(plumber())
    .pipe(less())
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(gulp.dest('css'))
    .pipe(minify())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('css'))
    .pipe(server.stream());
});


gulp.task('serve', function () {
  server.init({
    server: './'
  });

  gulp.watch('less/**/*.less', ['style']);
});

gulp.task('build', function (done) {
  run(
    'style',
    'images',
    'webp',
    done
  );
});
