//var elixir = require('laravel-elixir');
//require('laravel-elixir-remove');
var gulp = require('gulp');

sass = require('gulp-sass'); //Подключаем Sass пакет

gulp.task('mytask', function() {
    console.log('Привет, я таск!');
});


gulp.task('sass', function(){
    return gulp.src('resources/sass/**/*.+(scss|sass)') // Берем все sass файлы из папки sass и дочерних, если таковые будут
        .pipe(sass())
        .pipe(gulp.dest('public/css'))
});