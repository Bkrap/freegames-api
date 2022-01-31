//const boostrap = require('bootstrap');
const gulp = require( 'gulp' );
const sass = require( 'gulp-sass' )(require('sass'));
const autoprefixer = require( 'gulp-autoprefixer' );
var cssnano = require( 'gulp-cssnano' );
var rename = require( 'gulp-rename' );
var replace = require( 'gulp-replace' );
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const jquery = require('jquery');

gulp.task('install', function(done) {
    gulp.src( `./node_modules/jquery/**/*` )
        .pipe( gulp.dest( `./src/vendor/jquery` ) );
    gulp.src( `./node_modules/popper.js/**/*` )
        .pipe( gulp.dest( `./src/vendor/popper.js` ) );
    gulp.src( `./node_modules/bootstrap/**/*` )
        .pipe( gulp.dest( `./src/vendor/bootstrap` ) );
    gulp.src( `./node_modules/slick-carousel/**/*` )
        .pipe( gulp.dest( `./src/vendor/slick` ) );

    done();
});


gulp.task('styles', function(done) {
    gulp.src('./src/sass/main.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(autoprefixer([ "last 2 version", "IE 9" ]))
      .pipe(cssnano({ discardComments: { removeAll : true } }))
      .pipe(rename({suffix: '.min' }))
      .pipe(gulp.dest('./assets/css'));
      
      done();
});

gulp.task('script', function(done) {
    var scripts = [
        `./src/vendor/jquery/dist/jquery.js`,
        `./src/vendor/popper.js/dist/umd/popper.js`,
        `./src/vendor/bootstrap/dist/js/bootstrap.js`,
        `./src/vendor/slick/slick/slick.min.js`,
        `./src/js/**/*.js`,
    ];

    gulp.src(scripts, {allowEmpty: true})
        .pipe(concat('script.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./assets/js'));

    done();
});

gulp.task('watch', function(done) {
    gulp.watch('./src/sass/**/*.scss', gulp.parallel(['styles']));
    gulp.watch('./src/js/**/*.js', gulp.parallel(['script']));
    done();
});
