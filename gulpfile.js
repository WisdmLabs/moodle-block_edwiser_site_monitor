// Requiring gulp variable.
var gulp = require('gulp');

// Sass/CSS stuff.
var sass = require('gulp-sass');
var cssbeautify = require ('gulp-cssbeautify');
var concat = require('gulp-concat');
var prefix = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');
var shell  = require('gulp-shell');

// JS stuff.
var minify = require('gulp-minify');

// Compile all your Sass.
gulp.task('sass', function (){
    return gulp.src(['./scss/*.scss'])
    .pipe(sass({
        includePaths: ['./sass'],
        outputStyle: 'expanded'
    }))
    .pipe(prefix(
        "last 1 version", "> 1%", "ie 8", "ie 7"
        ))
    .pipe(concat('styles.css'))
    .pipe(cssbeautify({
        indent: '    ',
        autosemicolon: true
    }))
    .pipe(gulp.dest('./'))
});

gulp.task('compress', function() {
    return gulp.src('./amd/src/*.js')
    .pipe(minify({
        ext: {
            min: '.min.js'
        },
        noSource: true,
        ignoreFiles: []
    }))
    .pipe(gulp.dest('./amd/build'));
    done();
});


gulp.task('watch', function(done) {
    gulp.watch('./amd/src/*.js', gulp.series('compress'));
    gulp.watch('./scss/*.scss', gulp.series('sass'));
    done();
});

gulp.task('default', gulp.series('watch', 'compress', 'sass'));
