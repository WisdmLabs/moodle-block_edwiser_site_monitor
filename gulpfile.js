// Gulp
var gulp = require('gulp');

// Sass/CSS stuff
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var prefix = require('gulp-autoprefixer');
var minifycss = require('gulp-minify-css');
var shell  = require('gulp-shell');

// JS stuff
const minify = require('gulp-minify');

// Compile all your Sass.
gulp.task('sass', function (done){
    gulp.src(['./scss/*.scss'])
        .pipe(sass({
            includePaths: ['./sass'],
            outputStyle: 'expanded'
        }))
        .pipe(prefix(
            "last 1 version", "> 1%", "ie 8", "ie 7"
            ))
        .pipe(minifycss())
        .pipe(concat('styles.css'))
        .pipe(gulp.dest('./'))
        done();
});

gulp.task('compress', function(done) {
    gulp.src('./amd/src/*.js')
    .pipe(minify({
        ext:{
           min:'.min.js'
        },
        noSource: true,
        ignoreFiles: []
    }))
    .pipe(gulp.dest('./amd/build'));
    done();
});


gulp.task('watch', function() {
    gulp.watch('./amd/src/*.js', gulp.series('compress'));
    gulp.watch('./scss/*.scss', gulp.series('sass'));
    done();
});

gulp.task('default', gulp.series('watch', 'compress', 'sass'));
