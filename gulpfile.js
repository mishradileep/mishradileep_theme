var gulp        = require('gulp');
var browserSync = require('browser-sync').create();
var sass        = require('gulp-sass');

var config = {
    nodeModulesDir: './node_modules',
    assetsDir: './assets'
};

// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function() {

    browserSync.init({
        server: "./"
    });

    gulp.watch("scss/*.scss", ['sass']);
    gulp.watch("*.html").on('change', browserSync.reload);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src("scss/*.scss")
        .pipe(sass())
        .pipe(gulp.dest("css"))
        .pipe(browserSync.stream());
});

gulp.task('jquery', function() {
    return gulp.src(config.nodeModulesDir + '/jquery/dist/jquery.min.js')
        .pipe(gulp.dest(config.assetsDir + '/js'));
});

gulp.task('fontawesome-fonts', function() {
    return gulp.src([
        config.nodeModulesDir + '/font-awesome/fonts/*'])
        .pipe(gulp.dest(config.assetsDir + '/fonts'));
});

gulp.task('default', ['serve', 'jquery', 'fontawesome-fonts']);
