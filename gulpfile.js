const { src, dest, watch } = require('gulp');
const sass        = require('gulp-sass');
const minifyCSS   = require('gulp-csso');
const minify      = require('gulp-minify');
const babel       = require('gulp-babel');
const concat      = require('gulp-concat');
const sourcemaps  = require('gulp-sourcemaps');
const browserSync = require('browser-sync').create();

function css() {
  return src('./assets/scss/style.scss', { sourcemaps: true })
  .pipe(sourcemaps.init())
  .pipe(sass())
  .pipe(minifyCSS())
  .pipe(sourcemaps.write('.'))
  .pipe(dest('./'), { sourcemaps: true })
  .pipe(browserSync.stream());
}

function js() {
  return src('./assets/js/*.js', { sourcemaps: true })
  .pipe(babel({
    presets: ['@babel/env']
  }))
  .pipe(concat('build.js'))
  .pipe(minify())
  .pipe(dest('./assets/js/min'));
}

function jsLib() {
  return src(['bootstrap.min.js', 'jquery.maskedinput.min.js'])
  .pipe(concat('build-lib.js'))
  .pipe(minify())
  .pipe(dest('./assets/js/lib/min'));
}

// gulp.task('scripts', function() {
//   return gulp.src(['src/scripts/**/*.js','!src/scripts/custom.js', 'src/scripts/custom.js'])
//       .pipe(concat('main.js'))
//       .pipe(uglify())
//       .pipe(rename({suffix: '.min'}))
//       .pipe(gulp.dest('static/js'));
// });

// gulp.task('compress', function() {
//   gulp.src(['lib/*.js', 'lib/*.mjs'])
//     .pipe(minify())
//     .pipe(gulp.dest('dist'))
// });

function browser() {
  browserSync.init({
    proxy: 'http://localhost/marina-almeida/wp-theme/',
    ghostMode: {
      scroll: false
    },
    files: [
      './**/*.php'
    ]
  });

  watch('./assets/scss/**/*.scss', css);
  watch('./assets/js/*.js', js).on('change', browserSync.reload);
  watch('./assets/js/lib/*.js', js).on('change', browserSync.reload);
}

exports.css = css;
exports.js = js;
exports.jsLib = jsLib;
exports.default = browser;
