var gulp = require('gulp');
var rename = require('gulp-rename');
var elixir = require('laravel-elixir');

/**
 * Copy UTHSC Foundation files
 */
gulp.task("copyuthsc", function() {

    //copy uthsc scss to resources
    gulp.src("vendor/bower_dl/uthsc/scss/**")
        .pipe(gulp.dest("resources/assets/foundation/scss/"));

    //copy uthsc js to resources
    gulp.src("vendor/bower_dl/uthsc/js/src/**")
        .pipe(gulp.dest("resources/assets/foundation/js/"));

    //copy images to public
    gulp.src("vendor/bower_dl/uthsc/images/**")
        .pipe(gulp.dest("public/assets/foundation/images/"));






    // Copy datatables
    var dtDir = 'vendor/bower_dl/datatables-plugins/integration/';

    gulp.src("vendor/bower_dl/datatables/media/js/jquery.dataTables.js")
        .pipe(gulp.dest('resources/assets/foundation/js/'));

    gulp.src(dtDir + 'foundation/dataTables.foundation.css')
        .pipe(rename('dataTables.foundation.scss'))
        .pipe(gulp.dest('resources/assets/foundation/scss/others/'));

    gulp.src(dtDir + 'foundation/dataTables.bootstrap.js')
        .pipe(gulp.dest('resources/assets/js/'));





    gulp.src("vendor/bower_dl/fontawesome/less/**")
        .pipe(gulp.dest("resources/assets/less/fontawesome"));

    gulp.src("vendor/bower_dl/fontawesome/fonts/**")
        .pipe(gulp.dest("public/assets/fonts"));






});

/**
 * Copy any needed files.
 *
 * Do a 'gulp copyfiles' after bower updates
 */
gulp.task("copyfiles", function() {

    // Copy jQuery, Bootstrap, and FontAwesome
    gulp.src("vendor/bower_dl/jquery/dist/jquery.js")
        .pipe(gulp.dest("resources/assets/js/"));

    gulp.src("vendor/bower_dl/bootstrap/less/**")
        .pipe(gulp.dest("resources/assets/less/bootstrap"));

    gulp.src("vendor/bower_dl/bootstrap/dist/js/bootstrap.js")
        .pipe(gulp.dest("resources/assets/js/"));

    gulp.src("vendor/bower_dl/bootstrap/dist/fonts/**")
        .pipe(gulp.dest("public/assets/fonts"));

    gulp.src("vendor/bower_dl/fontawesome/less/**")
        .pipe(gulp.dest("resources/assets/less/fontawesome"));

    gulp.src("vendor/bower_dl/fontawesome/fonts/**")
        .pipe(gulp.dest("public/assets/fonts"));

    // Copy datatables
    var dtDir = 'vendor/bower_dl/datatables-plugins/integration/';

    gulp.src("vendor/bower_dl/datatables/media/js/jquery.dataTables.js")
        .pipe(gulp.dest('resources/assets/js/'));

    gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.css')
        .pipe(rename('dataTables.bootstrap.less'))
        .pipe(gulp.dest('resources/assets/less/others/'));

    gulp.src(dtDir + 'bootstrap/3/dataTables.bootstrap.js')
        .pipe(gulp.dest('resources/assets/js/'));

    // Copy selectize
    gulp.src("vendor/bower_dl/selectize/dist/css/**")
        .pipe(gulp.dest("public/assets/selectize/css"));

    gulp.src("vendor/bower_dl/selectize/dist/js/standalone/selectize.min.js")
        .pipe(gulp.dest("public/assets/selectize/"));

    // Copy pickadate
    gulp.src("vendor/bower_dl/pickadate/lib/compressed/themes/**")
        .pipe(gulp.dest("public/assets/pickadate/themes/"));

    gulp.src("vendor/bower_dl/pickadate/lib/compressed/picker.js")
        .pipe(gulp.dest("public/assets/pickadate/"));

    gulp.src("vendor/bower_dl/pickadate/lib/compressed/picker.date.js")
        .pipe(gulp.dest("public/assets/pickadate/"));

    gulp.src("vendor/bower_dl/pickadate/lib/compressed/picker.time.js")
        .pipe(gulp.dest("public/assets/pickadate/"));

    //copy autocomplete
    gulp.src("vendor/bower_dl/devbridge-autocomplete/dist/jquery.autocomplete.js")
        .pipe(gulp.dest("resources/assets/js"));

});

/**
 * Default gulp is to run this elixir stuff
 */
elixir(function(mix) {

    // Combine scripts
    mix.scripts([
            'js/jquery.js',
            'js/bootstrap.js',
            'js/jquery.dataTables.js',
            'js/dataTables.bootstrap.js'
        ],
        'public/assets/js/admin.js', 'resources//assets');

    // Combine grants scripts
    mix.scripts([
        'js/jquery.js',
        'js/bootstrap.js',
        'js/jquery.dataTables.js',
        'js/jquery.autocomplete.js',e    ], 'public/assets/js/grants.js', 'resources//assets');

    // Compile CSS
    mix.less('admin.less', 'public/assets/css/admin.css');
    mix.less('grants.less', 'public/assets/css/grants.css');
});