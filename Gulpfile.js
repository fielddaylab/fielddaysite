const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');

function compileSass() {
  console.log('🔄 Compiling SCSS...');
  return gulp.src('./assets/scss/styles_ver3.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'expanded',
      precision: 10
    }).on('error', sass.logError))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./assets/css'))
    .on('end', () => console.log('✅ SCSS compiled successfully!'));
}

function watch() {
  console.log('👀 Watching SCSS files for changes...');
  console.log('📝 Make changes to any SCSS file and refresh your browser to see updates');
  console.log('🌐 Open your site in the browser at your usual local development URL');
  gulp.watch('./assets/scss/**/*.scss', compileSass);
}

// Default task
gulp.task('default', gulp.series(compileSass, watch));

exports.compileSass = compileSass;
exports.watch = watch;