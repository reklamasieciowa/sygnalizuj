'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
 
// gulp.task('sass', function () {
//   return gulp.src('./wp-content/themes/sygnalizuj/scss/custom-styles.scss')
//     .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
//     .pipe(rename('style.min.css'))
//     .pipe(gulp.dest('./wp-content/themes/sygnalizuj/css'));
// });

gulp.task('mdb', function () {
  return gulp.src('./wp-content/themes/sygnalizuj/scss/mdb.scss')
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(rename( { suffix: '.min' } ))
    .pipe(gulp.dest('./wp-content/themes/sygnalizuj/css'));
});
 
gulp.task('watch', function () {
  gulp.watch('./wp-content/themes/sygnalizuj/scss/**/*.scss', gulp.series('mdb'));
});