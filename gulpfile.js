'use strict';

const autoprefixer = require('gulp-autoprefixer');
const browserify = require('browserify');
const concat = require('gulp-concat');
const cssnano = require('gulp-cssnano');
const fs = require('fs');
const gulp = require('gulp');
const gulpIf = require('gulp-if');
const merge = require('merge-stream');
const path = require('path');
const sass = require('gulp-sass');
const source = require('vinyl-source-stream');
const streamify = require('gulp-streamify');
const svgMin = require('gulp-svgmin');
const svgSprite = require('gulp-svg-sprite');
const uglify = require('gulp-uglify');

gulp.task('scripts', () => {
  browserify({
    debug: true,
    entries: 'assets/scripts/main.js',
  })
    .transform('babelify', {
      sourceMaps: false,
      presets: [
        'es2015',
      ]
    })
    .bundle()
    .pipe(source('main.js'))
    .pipe(streamify(uglify()))
    .pipe(gulp.dest('dist/scripts/'));
});

gulp.task('styles', () => {
  let lessStream = gulp.src([
    'assets/styles/common.scss',
  ])
    .pipe(sass());

  let concatStram = gulp.src([
    'node_modules/sanitize.css/sanitize.css',
    'assets/vendor/bootstrap/css/bootstrap.css',
  ]);

  merge(concatStram, lessStream)
    .pipe(autoprefixer({
      browsers: [
        'last 2 versions',
      ],
      cascade: false
    }))
    .pipe(concat('main.css'))
    .pipe(cssnano())
    .pipe(gulp.dest('dist/styles'));
});

gulp.task('fonts', () => {
  gulp.src([
    'assets/fonts/**/*',
  ])
    .pipe(gulp.dest('dist/fonts/'));
});

gulp.task('images', () => {
  const svgSpriteConfig = {
      mode: {
        css: false,
        defs: {
          dest: '',
          sprite: './sprite.svg',
        },
        stack: false,
        symbol: false,
        view: false,
      },
  };

  const svgStream = gulp.src([
    'assets/images/**/*.svg',
  ])
    .pipe(svgMin())
    .pipe(svgSprite(svgSpriteConfig))
    .pipe(gulp.dest('dist/images/'));

  const imagesStream = gulp.src([
    'assets/images/**/*',
  ])
    .pipe(gulp.dest('dist/images/'));

  return merge(svgStream, imagesStream);
});

gulp.task('watch', () => {
  gulp.watch('assets/styles/**/*', ['styles']);
  gulp.watch('assets/scripts/**/*', ['scripts']);
});

gulp.task('default', [
  'scripts',
  'styles',
  'fonts',
  'images',
]);
