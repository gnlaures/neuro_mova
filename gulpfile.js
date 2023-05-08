// modules
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const autoprefixer = require('gulp-autoprefixer');
const concat = require('gulp-concat');
const babel = require('gulp-babel');
const uglify = require('gulp-uglify');
const debug = require('gulp-debug');


// control vars
const control = {
    "files": {
        "styles": [
            "components/_defaults/mixins.scss",
            "components/_defaults/fonts.scss",
            "components/_defaults/presets.scss",
            "components/_defaults/reset.scss",
            "components/_defaults/utilities.scss",

            "components/c-responsiveGrid/index.scss",
            "components/c-btn/index.scss",

            "components/c-form/index.scss",
            "components/c-defaultContentStyle/index.scss",
            "components/c-breadcrumb/index.scss",
            "components/c-countdown/index.scss",
            "components/c-author/index.scss",
            "components/c-photo/index.scss",
            "components/c-iconBlock/index.scss",
            "components/c-skewBlock/index.scss",
            "components/c-socialList/index.scss",
            "components/c-readmore/index.scss",
            "components/c-brand/index.scss",
            "components/c-cardBlogPost/index.scss",
            "components/c-cardCompany/index.scss",
            "components/c-cardIcon/index.scss",
            "components/c-cardMap/index.scss",
            "components/c-error/index.scss",
            "components/c-copyright/index.scss",
            "components/c-hamburguer/index.scss",
            "components/c-scrollLink/index.scss",
            "components/c-devSignature/index.scss",
            "components/c-pagination/index.scss",
            "components/c-socialFixed/index.scss",
            "components/c-cardProduct/index.scss",
            "components/c-cardCategorie/index.scss",
            "components/c-cardShopkeeper/index.scss",
            "components/c-cardProductLine/index.scss",
            "components/c-arrowButton/index.scss",
            "components/c-sliderDotsControl/index.scss",
            "components/c-sliderPagesControl/index.scss",
            "components/c-sitemap/index.scss",

            "components/s-movaIntro/index.scss",
            "components/s-sliderCards/index.scss",
            "components/s-instagram/index.scss",
            "components/s-b2b/index.scss",

            "components/l-nav/index.scss",
            "components/l-footer/index.scss",
            "components/l-headerHome/index.scss",

            "components/p-home/index.scss",

        ],
        "scripts": [
            "components/_defaults/utilities.js",

            "components/c-responsiveGrid/index.js",
            //"components/c-form/index.js",
            //"components/c-countdown/index.js",
            "components/c-photo/index.js",
            "components/c-copyright/index.js",
            "components/c-hamburguer/index.js",
            "components/c-sliderPagesControl/index.js",
            "components/c-scrollLink/index.js",

            "components/s-sliderCards/index.js",
            "components/s-instagram/index.js",

            "components/l-nav/index.js",
            "components/l-headerHome/index.js",
        ],
    },
    "dist" : 'dist/'
};


// project tasks
const tasks = {
    "styles": () => {
        return gulp
            .src(control.files.styles)
            .pipe(debug({title: 'file:'}))
            .pipe(concat('styles-min.css'))
            .pipe(sass({outputStyle: 'compressed'}))
            .pipe(autoprefixer({cascade: false}))
            .pipe(gulp.dest(control.dist));
    },
    "scripts": () => {
        return gulp
            .src(control.files.scripts)
            .pipe(debug({title: 'file:'}))
            .pipe(concat('scripts-min.js'))
            .pipe(babel({presets: ['@babel/preset-env']}))
            .pipe(uglify())
            .pipe(gulp.dest(control.dist));
    },
}


// gulp tasks
gulp.task('styles', (done) => {tasks.styles(); done()});
gulp.task('scripts', (done) => {tasks.scripts(); done()});
gulp.task('watch', () => {
    gulp.watch('components/**/*.scss', tasks.styles);
    gulp.watch('components/**/*.js', tasks.scripts);
});
gulp.task('default', gulp.parallel('styles', 'scripts'));
