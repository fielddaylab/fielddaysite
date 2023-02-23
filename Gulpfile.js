var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
var browserSync = require('browser-sync').create();

gulp.task('styles', function (){
  gulp.src('./assets/scss/styles_ver2.scss')
    .pipe(sass())
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.reload({stream: true}));
});

gulp.task('serve', function () {

  browserSync.init({
    server: {
      baseDir: './'
    }
  });

  gulp.watch('./assets/scss/*scss', ['styles']).on('change', browserSync.reload);
  gulp.watch('./**/*.html').on('change', browserSync.reload);

});

gulp.task('proxy', function () {
  browserSync.init({
    proxy: "localhost:8888"
  });

  gulp.watch('./assets/scss/*scss', ['styles']);
  gulp.watch('./**/*.php').on('change', browserSync.reload);
  gulp.watch('./**/*.html').on('change', browserSync.reload);

});

gulp.task('default', ['styles', 'serve']);
