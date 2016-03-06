var gulp = require('gulp');
var notify = require('gulp-notify');
var concat = require('gulp-concat');
var runSequence = require('run-sequence');

var paths = {
    css: [
        'bower_components/font-awesome/css/font-awesome.min.css',
        'bower_components/angular-material/angular-material.min.css',
        'src/app.css'
    ],
    js: [
        'bower_components/angular/angular.min.js',
        'bower_components/angular-animate/angular-animate.min.js',
        'bower_components/angular-messages/angular-messages.min.js',
        'bower_components/angular-aria/angular-aria.min.js',
        'bower_components/angular-material/angular-material.min.js',
        'src/app.js'
    ]
};

gulp.task('default', function() {
    gulp.src('./bower_components/font-awesome/fonts/**/*.{otf,eot,svg,ttf,woff,woff2}')
        .pipe(gulp.dest('./dist/fonts'));

    gulp.src('src/index.php').pipe(gulp.dest('dist'));
    gulp.src('src/robots.txt').pipe(gulp.dest('dist'));

    runSequence('css', 'js');
});

gulp.task('css', function() {
    return gulp.src(paths.css)
        .pipe(concat('app.css'))
        .pipe(gulp.dest('dist'))
        .pipe(notify({
            title: 'Success',
            message: 'CSS built'
        }));
});

gulp.task('js', function() {
    return gulp.src(paths.js)
        .pipe(concat('app.js'))
        .pipe(gulp.dest('dist'))
        .pipe(notify({
            title: 'Success',
            message: 'JS built'
        }));
});