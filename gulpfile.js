'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');


// const browserSync = require('browser-sync').create();

gulp.task('sass', function () {
 return gulp.src(['./scss/*.scss'])
   .pipe(sass.sync().on('error', sass.logError))
   .pipe(gulp.dest('./css'))
   .pipe(browserSync.stream());
});

// Watch SASS & Serve
gulp.task('serve', ['sass'], function(){
  browserSync({
    server: {
      baseDir: './',
    },
    port: 3000
  });

  gulp.watch(['./scss/*.scss'], ['sass']);
  gulp.watch("*.html").on('change', browserSync.reload);
});

gulp.task('sass:watch', function () {
 gulp.watch(['./scss/*.scss'], ['sass']);
});


gulp.task('default', ['serve']);
