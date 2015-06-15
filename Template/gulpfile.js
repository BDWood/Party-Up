var gulp = require('gulp');

//required plugins, linter, sass, concatenation of files, uglification of files,
//autoprefixer
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var autoprefixer = require('gulp-autoprefixer');

gulp.task('lint', function() {
    return gulp.src('my_assets/js/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter('YOUR_REPORTER_HERE'));
});

gulp.task('sass', function () {
    gulp.src('my_assets/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('my_assets/css'));
});

gulp.task('scripts', function() {
    return gulp.src('my_assets/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('./dist/'));
});

gulp.task('compress', function() {
    return gulp.src('my_assets/js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist'));
});

gulp.task('autoprefix', function () {
    return gulp.src('my_assets/css/styles.css')
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('dist'));
});

gulp.task('watch', function() {
    gulp.watch('my_assets/js/*.js', ['lint', 'scripts']);
    gulp.watch('my_assets/sass/*.scss', ['sass']);
});