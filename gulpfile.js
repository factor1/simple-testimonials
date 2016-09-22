const gulp = require('gulp');
const zip = require('gulp-zip');

gulp.task('default', () => {
    return gulp.src('src/simple-testimonials-by-factor1/**/*')
        .pipe(zip('simple-testimonials-by-factor1.zip'))
        .pipe(gulp.dest('dist'));
});
