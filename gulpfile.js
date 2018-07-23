
const gulp = require('gulp'),
    pug = require('gulp-pug'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    browserSync = require('browser-sync').create();


gulp.task('pug',function () {
    gulp.src('./dev/*.pug')
        .pipe(pug({
            pretty: true
        }))
        .pipe(gulp.dest('./dist/'))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task('sass', function() {
    gulp.src("./dev/sass/*.scss")
        .pipe(sass({
            outputStyle: 'expended',   // nested(default),compact,compressed
            // sourceComments: true       // true | false(default)
        }).on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            //cascade: true            // true(default) | false
        }))
        .pipe(gulp.dest("./dist/assets/css/"))
        .pipe(browserSync.reload({stream: true}));
});


gulp.task('browser-sync',[/*'pug' ,*/'sass'], function () {
   browserSync.init({
       server: {
           baseDir: './dist/'
       }
   });

   gulp.watch('./dev/**/*.pug',['pug']);
   gulp.watch('/dev/**/.pug"').on('change', browserSync.reload);

    gulp.watch("./dev/sass/**/*.scss", ['sass']);
    gulp.watch("./dist/**/*.html").on('change', browserSync.reload);

    gulp.watch("./dist/js/*.js").on('change', browserSync.reload);

});

gulp.task('default',['browser-sync']);




