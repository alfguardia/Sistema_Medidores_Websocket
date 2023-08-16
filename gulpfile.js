const { src, dest, watch, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const plumber = require('gulp-plumber');

//CSS (gulp-src)
function css(done) {
    src('src/scss/**/*.scss') // localiza la fuente (source = src) de los archivos con extension scss dentro de la carpeta SCSS
        .pipe(plumber())           //Plumber para el manejo de errores
        .pipe(sass())               //Para compilar el css 
        .pipe(dest('build/css'))    //El destino (dest) donde va a compilar

    done();
}

function js(done) {
    src('src/js/**/*.js')
        .pipe(dest('build/js'))

    done();
}


function live(done) {

    watch('src/scss/**/*.scss', css)
    watch('src/js/**/*.js', js)

    done();
}

exports.css = css;
exports.js = js;
exports.live = parallel(css, js, live);



