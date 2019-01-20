const { src, dest, parallel } = require('gulp');
const pug = require('gulp-pug');
const less = require('gulp-less');
const minifyCSS = require('gulp-csso');
const concat = require('gulp-concat');

// function html() {
//   return src('client/templates/*.pug')
//     .pipe(pug())
//     .pipe(dest('build/html'))
// }

function css() {
	// return src('assets/css/*.less')
	return src('assets/css/main.less')
		.pipe(concat('app.min.css'))
		.pipe(less())
		.pipe(minifyCSS())
		.pipe(dest('assets/css'))
}

function js() {
	return src('assets/js/*.js', { sourcemaps: false })
		.pipe(concat('app.min.js'))
		.pipe(dest('assets/js', { sourcemaps: false }))
}

exports.js = js;
exports.css = css;
// exports.html = html;
exports.default = parallel(/*html, */css, js);