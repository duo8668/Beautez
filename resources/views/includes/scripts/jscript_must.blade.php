
<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="{{asset('js/libs/jquery-2.1.1.min.js')}}"><\/script>');
    }
</script>

<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script src="{{asset('js/libs/vue/vue.js')}}"></script>
<script src="{{asset('js/libs/vue/vue-resource.js')}}"></script>
<script src="{{asset('js/libs/vue/vue-validator.js')}}"></script>
<script src="{{asset('js/libs/vue/vue-router.js')}}"></script>
<script src="{{asset('js/beautez/common/generic-util.js')}}"></script>
<script src="{{asset('js/beautez/plugin/vue-ajax.js')}}"></script>
<script src="{{asset('js/beautez/plugin/vue-modal.js')}}"></script>

<script>
    Vue.config.warnExpressionErrors = false;
</script>