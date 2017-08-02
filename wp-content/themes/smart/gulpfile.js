'use stict';
var gulp = require('gulp') ;
var sass = require('gulp-sass') ;

gulp.task('default', function() {
}) ;
gulp.task('sass', function () {
  gulp.src('./sass/**/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('./css'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./sass/**/*.scss', ['sass']);

  gulp.watch('./sass/abstract/**/*.scss', ['sass']);
  gulp.watch('./sass/base/**/*.scss', ['sass']);
  gulp.watch('./sass/components/**/*.scss', ['sass']);
  gulp.watch('./sass/layout/**/*.scss', ['sass']);
  gulp.watch('./sass/pages/**/*.scss', ['sass']);
  gulp.watch('./sass/themes/**/*.scss', ['sass']);
  gulp.watch('./sass/vendors/**/*.scss', ['sass']);
});

//gulp sass:watch