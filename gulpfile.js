

const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

//compile scss into css
function style() {
    return gulp.src('./wp-content/themes/silverstheme/sass/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./wp-content/themes/silverstheme/css/'))
    .pipe(browserSync.stream());
}

function watch(){
    browserSync.init({
        server:{
            baseDir: './'
        }
    })
    gulp.watch('./wp-content/themes/silverstheme/sass/*.scss', style);
    gulp.watch('./*.html').on('change', browserSync.reload);
    gulp.watch('./scss/**/*.js').on('change', browserSync.reload);

}
exports.style = style;
exports.watch= watch;
