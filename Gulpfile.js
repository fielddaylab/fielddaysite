var gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
var browserSync = require('browser-sync').create();

gulp.task('styles', function (done){
  gulp.src('./assets/scss/styles_ver2.scss')
    .pipe(sass())
    .pipe(gulp.dest('./assets/css'))
    .pipe(browserSync.reload({stream: true}));
    done();
});

gulp.task('serve', function (done) {

  browserSync.init({
    server: {
      baseDir: './'
    }
  });

  gulp.watch('./assets/scss/*scss', ['styles']).on('change', browserSync.reload);
  gulp.watch('./**/*.html').on('change', browserSync.reload);
  done();
});

gulp.task('proxy', function (done) {
  browserSync.init({
    proxy: "localhost:8888"
  });

  gulp.watch('./assets/scss/*scss', ['styles']);
  gulp.watch('./**/*.php').on('change', browserSync.reload);
  gulp.watch('./**/*.html').on('change', browserSync.reload);
  done();
});

gulp.task('default', gulp.series('styles', 'serve'));
