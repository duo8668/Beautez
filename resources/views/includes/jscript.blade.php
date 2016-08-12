
<!-- #PLUGINS -->
@include('includes.scripts.jscript_must')
<!-- IMPORTANT: APP CONFIG -->
<script src="{{asset('js/app.config.js')}}"></script>
<script type="text/javascript">
$(document).ready(function () {
    $.sound_path = "{{url('/sound/')}}" + "/";
  
});
</script>
<!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
<script src="{{asset('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script> 

<!-- BOOTSTRAP JS -->
<script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="{{asset('js/notification/SmartNotification.js')}}"></script>

<!-- JARVIS WIDGETS -->
<script src="{{asset('js/smartwidgets/jarvis.widget.min.js')}}"></script>

<!-- EASY PIE CHARTS -->
<script src="{{asset('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>

<!-- SPARKLINES -->
<script src="{{asset('js/plugin/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- JQUERY VALIDATE -->
<script src="{{asset('js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>

<!-- JQUERY MASKED INPUT -->
<script src="{{asset('js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="{{asset('js/plugin/select2/select2.min.js')}}"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="{{asset('js/plugin/bootstrap-slider/bootstrap-slider.min.js')}}"></script>

<!-- browser msie issue fix -->
<script src="{{asset('js/plugin/msie-fix/jquery.mb.browser.min.js')}}"></script>

<!-- FastClick: For mobile devices: you can disable this in app.js -->
<script src="{{asset('js/plugin/fastclick/fastclick.min.js')}}"></script>

<!--[if IE 8]>
        <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
<![endif]-->

<!-- Demo purpose only 
<script src="{{asset('js/demo.min.js')}}"></script>-->

<!-- MAIN APP JS FILE -->
<script src="{{asset('js/app.js')}}"></script>

<!-- SmartChat UI : plugin -->
<script src="{{asset('js/smart-chat-ui/smart.chat.ui.min.js')}}"></script>
<script src="{{asset('js/smart-chat-ui/smart.chat.manager.min.js')}}"></script>
