var gulp = require( 'gulp' ); //is must require
var rename = require( 'gulp-rename' ); //rename use to add .min to style.css and make style.min.css
var css = require( 'gulp-css' );
var uglify = require('gulp-uglify');
var autoprefixer = require( 'gulp-autoprefixer'); //added auto all browser code to support
var sourcemaps = require( 'gulp-sourcemaps'); //identify source file on inspect
var cli = require('gulp-cli');
var browserify = require('browserify');
var babelify = require('babelify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');


var  styleSRC = 'assets/Admin/qbf_create.css';
var  styleDIST = 'assets/Admin/CSS-Minify';  //here is the added css automatically


var styleWatch = 'assets/Admin/**/*.css'; //** means every file then/*.scss mean every folder and scss file

var  jsSRC = 'qbf_create.js';  //source file where i write the code of scss
var  jsFolder = 'assets/Admin/';  //source file where i write the code of scss
var  jsDIST = 'assets/Admin/JS-Minify/';  //here is the added css automatically
var jsWatch = 'assets/Admin/**/*.js';
var jsFILES = [jsSRC];


gulp.task('style_css', async function(){
    gulp.src( styleSRC )  //set the source file
        .pipe(sourcemaps.init())

        .pipe( css({
            errorLogToConsole: true,
            outputStyle: 'compressed'
        }))

        .on('error', console.error.bind( console ))
        .pipe( autoprefixer({

            overrideBrowserslist: ['last 2 versions'],
            cascade: false
        }))
        .pipe( rename({suffix: '.min'}))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest( styleDIST ));
});

gulp.task('js', async function (){
    jsFILES.map(function( entry){
        return browserify({
            entries: [jsFolder + entry]
        })
            .transform( babelify, {presets:['env']})
            .bundle()
            .pipe( source( entry ))
            .pipe( rename({extname: '.min.js'}))
            .pipe( buffer() )
            .pipe( sourcemaps.init({ loadMaps: true}))
            .pipe( uglify() )
            .pipe( sourcemaps.write( './' ))
            .pipe( gulp.dest( jsDIST ))

    });

});



gulp.task( 'watch', function( ){
    gulp.watch( styleWatch, gulp.series('style_css') );
    gulp.watch( jsWatch, gulp.series('js') );
});


gulp.task( 'default', gulp.series( ['style_css', 'js', 'watch'] ) );




// ^c = ctrl + c to stop terminal

