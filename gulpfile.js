//Подключение gulp
const gulp = require('gulp');
//Объединение файлов
const concat = require('gulp-concat');
//Добавление префиксов
const autoprefixer = require('gulp-autoprefixer');
//Оптимизация стилей
const cleanCSS = require('gulp-clean-css');
//Оптимизация скриптов
const uglify = require('gulp-uglify');
//Удаление файлов
const del = require('del');
//Синхронизация с браузером
const browserSync = require('browser-sync').create();
//Для препроцессоров стилей
const sourcemaps = require('gulp-sourcemaps');
//Less препроцессор
const less = require('gulp-less');
//Модуль для сжатия изображений
const imagemin = require('gulp-imagemin');
//Модуль переменования файлов
const rename = require('gulp-rename');




//Порядок подключения less файлов
const styleFiles = [
  './src/css/normalize.less',
  './src/css/page.less',
  './src/css/font.less',
  './src/css/variables.less',
  './src/css/mixin.less',
  './src/css/elements.less',
  './src/css/main.less',
  './src/css/media.less'
]

//Порядок подключения js файлов
const scriptFiles = [
  './src/js/navigation.js',
  './src/js/scroll.js',
  './src/js/skills.js',
  './src/js/work.js',
  './src/js/form.js',
  './src/js/footer.js',
  './src/js/focus.js'
]


//Таск для обработки стилей
const styles = () => {
  //Шаблон для поиска файлов CSS
  //Всей файлы по шаблону './src/css/**/*.css'
  return gulp.src(styleFiles)
     .pipe(sourcemaps.init())
     //Указать stylus() , sass() или less()
     .pipe(less())
     //Объединение файлов в один
     .pipe(concat('style.css'))
     //Добавить префиксы
     .pipe(autoprefixer({
        overrideBrowserslist: ['last 2 versions'],
        cascade: false
     }))
     //Минификация CSS
     .pipe(cleanCSS({
        level: 2
     }))
     .pipe(sourcemaps.write('./'))
     .pipe(rename({
        suffix: '.min'
     }))
     //Выходная папка для стилей
     .pipe(gulp.dest('./build/css'))
     .pipe(browserSync.stream());
}

exports.styles = styles;

//Таск на скрипты JS
const scripts = () => {
  //Шаблон для поиска файлов js
  //Все файлы по шаблону '/src/js/**/*.js'
  return gulp.src(scriptFiles)
  //Объединение файлов в один
  .pipe(concat('script.js'))
  //Минификация js
  .pipe(uglify({
    toplevel: true
  }))
  .pipe(rename({
    suffix: '.min'
  }))
  //Выходная папка для скриптов
  .pipe(gulp.dest('./build/js'))
  .pipe(browserSync.stream());
}

exports.scripts = scripts;

//Удалить все в указанной папке
const removal = () => {
  return del(['build/*'])
}

exports.removal = removal;


const imgmin = () => {
  return gulp.src('./src/img/**')
  .pipe(imagemin({
    progressive: true
  }))
  .pipe(gulp.dest('./build/img/'))
}

exports.imgmin = imgmin;

//Просматривать файлы
const watch = () => {
  browserSync.init({
        server: {
          baseDir: "./",
          routes: {
            '/node_modules': 'node_modules'
          }
        }
    });
    gulp.watch('./src/img/**', gulp.series('imgmin'))
    //Слежка за CSS файлами
    gulp.watch('./src/css/**/*.less', gulp.series('styles'))
    //Следить за JS файлами
    gulp.watch('./src/js/**/*.js', gulp.series('scripts'))
    //Запуск синхронизации при изменении HTML
    gulp.watch("./*.html").on('change', browserSync.reload);
}

exports.watch = watch;

//Таск по умолчанию, запускает del, styles, scripts, watch
exports.default = gulp.series(removal, gulp.parallel(styles, scripts, imgmin), watch);
