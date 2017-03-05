 'use strict';

  const  gulp = require('gulp');
  const  autoprefixer =  require('gulp-autoprefixer');
  const  cssnano = require('gulp-cssnano');
  const  uglify = require('gulp-uglify');
  const  concat = require('gulp-concat');  
  const  rename = require('gulp-rename');
  var order = require("gulp-order");

  // Paths
const cssPath = './src/css/**/*.css';
const jsPath = './src/js/**/*.js';

// Concatenate, prefix and minify css
gulp.task('styles', function() {
  gulp.src(cssPath)
     .pipe(concat('styles.css'))
     .pipe(autoprefixer({
       browsers: ['last 2 versions'],
       cascade: false
     }))
     .pipe(cssnano())
     .pipe(rename('styles.min.css'))
  .pipe(gulp.dest('./dist/css/'))
});


// Concatenate and minify js files
gulp.task('scripts', function() {
 gulp.src(['./src/js/libs/jquery.js', './src/js/libs/bootstrap.js'])
  .pipe(concat('libs.min.js'))
  .pipe(uglify({
   preserveComments: 'license',
   compress: { hoist_funs: false }
}))
 .pipe(gulp.dest('./dist/js/'))
});

// Watcher For changes in files
gulp.task('watch', function() {
  gulp.watch(cssPath, ['styles']);
  gulp.watch(jsPath, ['scripts']);
});


// Run all the tasks
gulp.task('default', ['styles', 'scripts', 'watch']);