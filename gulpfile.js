var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    concat = require('gulp-concat'),
    imagemin = require('gulp-imagemin'),
    livereload = require('gulp-livereload'),
    jshint = require('gulp-jshint');
 
gulp.task('sass', function () {
    gulp.src('development/site.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({
        sourcemap: true,
        style: 'compresed'
    }))
    .on('error', function (err) {
        console.error('Error!', err.message);
    })
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('assets/css'))
    .pipe(livereload());
});

gulp.task('js', function () {
    gulp.src('development/js/*.js')
    .pipe(jshint())
    .pipe(jshint.reporter('fail'))
    .pipe(concat('theme.js'))
    .pipe(gulp.dest('assets/js'))
    .pipe(livereload());
});

gulp.task('img', function() {
  gulp.src('development/images/*.{png,jpg,gif}')
    .pipe(imagemin({
      optimizationLevel: 7,
      progressive: true
    }))
    .pipe(gulp.dest('assets/images'))
    .pipe(livereload());
});

gulp.task('update', function() {
    gulp.src('*.js')
    .pipe(livereload());
});

gulp.task('watch', function() {
    livereload.listen();
    gulp.watch('development/js/*.js', ['js']);
    gulp.watch('development/*.scss', ['sass']);
    gulp.watch('development/images/*.{png,jpg,gif}', ['img']);
    gulp.watch('**/*.php', ['update']);
});

 
gulp.task('default', ['sass','js', 'img']);