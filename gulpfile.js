'use strict';

var gulp = require('gulp'),
	rename = require('gulp-rename'),
	autoprefixer = require('gulp-autoprefixer'),
	livereload = require('gulp-livereload'),
	connect = require('gulp-connect'),
	sass = require('gulp-sass'),
	fileinclude = require('gulp-file-include'),
	concat = require('gulp-concat');

// BUILD
gulp.task('build', function () {
	gulp.src('./assets/scss/main.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
            browsers: ['last 15 versions', 'Opera 12.1'],
						cascade: true
        }))
		.pipe(rename('css/main.css'))
    	.pipe(gulp.dest('build/'))
	gulp.src('./assets/templates/*.html')
		gulp.src(['./assets/templates/index.html'])
			.pipe(fileinclude({
				prefix: '@@',
				basepath: './assets/templates/blocks/'
			}))
		.pipe(rename("index.html"))
		.pipe(gulp.dest('build/'))
	gulp.src('./assets/js/**/*.js')
		.pipe(concat('js/scripts.js'))
    	.pipe(gulp.dest('build/'))
    gulp.src('./assets/images/*')
		.pipe(gulp.dest('./build/images'));
});

// BUILD SINGLE
gulp.task('build_single', function () {
	gulp.src('./assets/scss/main.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(autoprefixer({
            browsers: ['last 15 versions', 'Opera 12.1'],
						cascade: true
        }))
		.pipe(rename('css/main.css'))
    	.pipe(gulp.dest('build/'))
	gulp.src('./assets/templates/*.html')
		gulp.src(['./assets/templates/single.html'])
			.pipe(fileinclude({
				prefix: '@@',
				basepath: './assets/templates/blocks/'
			}))
		.pipe(rename("single.html"))
		.pipe(gulp.dest('build/'))
	gulp.src('./assets/js/**/*.js')
		.pipe(concat('js/scripts.js'))
    	.pipe(gulp.dest('build/'))
    gulp.src('./assets/images/*')
		.pipe(gulp.dest('./build/images'));
});

// SERVER
gulp.task('connect', function() {
  	connect.server({
		root: 'build',
    	livereload: true
  });
});
gulp.task('server', ['connect', 'watch'], function () {
	gulp.src("./build/")
});

// SERVER SINGLE
gulp.task('server_single', ['connect', 'watch_single'], function () {
	gulp.src("./build/")
});

// SASS
gulp.task('sass', function () {
	gulp.src('./assets/scss/main.scss')
		.pipe(sass().on('error', sass.logError))
		.pipe(concat('css/main.css'))
		     .pipe(autoprefixer({
            browsers: ['last 15 versions', 'Opera 12.1'],
			cascade: true
        	}))
		.pipe(gulp.dest('build/'))
		.pipe(connect.reload());
});

// JS
gulp.task('js', function () {
	gulp.src('./assets/js/**/*.js')
		.pipe(concat('js/scripts.js'))
    	.pipe(gulp.dest('build/'))
		.pipe(connect.reload());
});

// HTML
gulp.task('html', function () {
	gulp.src('./assets/templates/*.html')
		.pipe(rename("index.html"))
		gulp.src(['./assets/templates/index.html'])
			.pipe(fileinclude({
		  		prefix: '@@',
		  		basepath: './assets/templates/blocks/'
			}))
		.pipe(gulp.dest('build/'))
		.pipe(connect.reload());
});

// HTML SINGLE
gulp.task('html_single', function () {
	gulp.src('./assets/templates/*.html')
		.pipe(rename("single.html"))
		gulp.src(['./assets/templates/single.html'])
			.pipe(fileinclude({
		  		prefix: '@@',
		  		basepath: './assets/templates/blocks/'
			}))
		.pipe(gulp.dest('build/'))
		.pipe(connect.reload());
});


// IMAGES
gulp.task('images', function () {
    gulp.src('./assets/images/*')
        .pipe(gulp.dest('./build/images'))
        .pipe(connect.reload());
});

// WATCH
gulp.task('watch', function () {
	gulp.watch('./assets/templates/**/*.html', ['html']);
	gulp.watch('./assets/scss/**/*.scss', ['sass']);
	gulp.watch('./assets/js/**/*.js', ['js']);
	gulp.watch('./assets/images/*', ['images']);
});

// WATCH SINGLE
gulp.task('watch_single', function () {
	gulp.watch('./assets/templates/**/*.html', ['html_single']);
	gulp.watch('./assets/scss/**/*.scss', ['sass']);
	gulp.watch('./assets/js/**/*.js', ['js']);
	gulp.watch('./assets/images/*', ['images']);
});