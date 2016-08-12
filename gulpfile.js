var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 elixir.config.js.folder = ''; 
elixir(function (mix) {

    mix.less('vue-validation/vue-interactive.less', 'public/css/');
    elixir.config.assetsPath = '../'; 
    //mix.browserify('./modules/User/Assets/registerUser.js', 'modules/user/register.js');

    mix.scripts('./resources/assets/vue/beautez/common/generic-util.js', 'public/js/beautez/common/generic-util.js');

    mix.scripts('./resources/assets/vue/beautez/plugin/vue-ajax.js', 'public/js/beautez/plugin/vue-ajax.js');

    mix.scripts('./resources/assets/vue/beautez/plugin/vue-modal.js', 'public/js/beautez/plugin/vue-modal.js');

    mix.scripts(['./resources/assets/beautez/validation/mixins/globalvalidator-mixin.js','./modules/User/Assets/registerUser.js'], 'public/js/modules/user/register.js');

   /*
    mix.scripts(['/plugins/jQuery/jQuery-2.1.4.min.js'
                , '/plugins/jqueryUI/1.11.4/jquery-ui.min.js'
                , '/bootstrap/js/bootstrap.min.js'
                , '/plugins/morris/raphael-min.js'
                , '/plugins/morris/morris.min.js'
                , '/plugins/sparkline/jquery.sparkline.min.js'
                , '/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'
                , '/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'
                , '/plugins/knob/jquery.knob.js'
                , '/plugins/momentjs/2.10.2/moment.min.js'
                , '/plugins/daterangepicker/daterangepicker.js'
                , '/plugins/datepicker/bootstrap-datepicker.js'
                , '/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'
                , '/plugins/slimScroll/jquery.slimscroll.min.js'
                , '/plugins/fastclick/fastclick.min.js'
                , '/plugins/vue/vue.min.js'
                , '/dist/js/app.min.js'
    ], 'public/js/plugin.js');
    */
});
