let gulp = require("gulp");
let uglify = require("gulp-uglify");
let babel = require("gulp-babel");
let minifycss = require("gulp-minify-css");
let imagemin = require("gulp-imagemin");
let htmlmin = require("gulp-htmlmin");

gulp.task("uglify",function(){
	gulp.src("ajax.js").pipe(uglify()).pipe(gulp.dest("E:\\Dest"));
});

gulp.task("_es",function(){
	gulp.src("js/*.js").pipe(babel({presets: ['es2015']})).pipe(uglify()).pipe(gulp.dest("E:\\Dest"));
	});
gulp.task("_minifycss",function(){
		gulp.src("css/*.css").pipe(minifycss()).pipe(gulp.dest("E:\\Dest"));
});

gulp.task("_image",function(){
		gulp.src("img/**/*").pipe(imagemin()).pipe(gulp.dest("E:\\Dest"));
});

gulp.task("_html",function(){
		gulp.src("shopping.html").pipe(htmlmin()).pipe(gulp.dest("E:\\Dest"));
});