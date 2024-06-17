const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

function compileSass() {
  return gulp.src('./assets/scss/styles_ver3.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./assets/css'));
}

function watch() {
  gulp.watch('./assets/scss/*.scss', compileSass);
}

exports.compileSass = compileSass;
exports.watch = watch;