import gulp from 'gulp';
import babel from 'gulp-babel';
import browserSync from 'browser-sync';
import sass from 'gulp-sass';
import autoprefixer from 'gulp-autoprefixer';
import pug from 'gulp-pug';

const server = browserSync.create();

gulp.task('pug', ()=> {
    gulp.src('./dev/pug/*.pug')
        .pipe(pug({
            pretty: true
        }))
        .pipe(gulp.dest('./dist/'));
        // .pipe(server.reload({
        //     stream: true}
        // ));
});

// Babel
gulp.task('es6', ()=> {
    gulp.src('./dev/js6/script.js')
        .pipe(babel())
        .pipe(gulp.dest('./dist/assets/js/'));
});

// SASS
gulp.task('sass', ()=> {
    gulp.src('./dev/sass/estilos.scss')
        .pipe(sass({                        // sass({outputStyle: 'expanded'})
          outputStyle: 'expanded'
        }).on('error', sass.logError))  
        .pipe(autoprefixer({
          browsers: ['last 2 versions']
        }))
        .pipe(gulp.dest('./dist/assets/css/'))
        .pipe(server.stream({
            match: '**/*.css'  // Inyecta CSS sin recargar la página
        }));
});

// DEFAULT
gulp.task('default', ()=> {
    server.init({
        server: {
            baseDir: './dist/'
        }
    });
    gulp.watch('./dev/pug/**/*.pug',['pug']);
    gulp.watch('./dev/js6/*.js',['es6', server.reload]);
    gulp.watch('./dev/sass/**/*.scss',['sass', server.reload]);
    gulp.watch('./dist/*.html',()=>{
        server.reload();
    });
});
