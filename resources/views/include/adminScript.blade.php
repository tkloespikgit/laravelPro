<script src="{{asset("js/admin/jquery.min.js")}}"></script>
<script src="{{asset("js/admin/bootstrap.min.js")}}"></script>
<script src="{{asset("js/admin/fastclick.js")}}"></script>
<script src="{{asset("js/admin/nprogress.js")}}"></script>
<script src="{{asset("js/admin/chart.min.js")}}"></script>
<script src="{{asset("js/admin/gauge.min.js")}}"></script>
<script src="{{asset("js/admin/bootstrap-progressbar.min.js")}}"></script>
<script src="{{asset("js/admin/icheck.min.js")}}"></script>
<script src="{{asset("js/admin/skycons.js")}}"></script>
<script src="{{asset("js/admin/jquery.flot.js")}}"></script>
<script src="{{asset("js/admin/jquery.flot.pie.js")}}"></script>
<script src="{{asset("js/admin/jquery.flot.time.js")}}"></script>
<script src="{{asset("js/admin/jquery.flot.stack.js")}}"></script>
<script src="{{asset("js/admin/jquery.flot.resize.js")}}"></script>
<script src="{{asset("js/admin/jquery.flot.orderBars.js")}}"></script>
<script src="{{asset("js/admin/jquery.flot.spline.min.js")}}"></script>
<script src="{{asset("js/admin/curvedLines.js")}}"></script>
<script src="{{asset("js/admin/date.js")}}"></script>
<script src="{{asset("js/admin/pnotify.js")}}"></script>
<script src="{{asset("js/admin/pnotify.buttons.js")}}"></script>
<script src="{{asset("js/admin/pnotify.nonblock.js")}}"></script>
<script src="{{asset("js/admin/smartWizard.js")}}"></script>
<script src="{{asset("js/admin/switchery.min.js")}}"></script>
<script src="{{asset("js/admin/custom.js")}}"></script>
<script>
    var system = {
        notify : function (message,type="warning",title="tips") {
            new PNotify({
                title: '提示',
                text: message,
                type: type,
                styling: 'bootstrap3'
            })
        },
        ajaxGet : function (url) {
            $.get(url,function (result) {
                console.log(result);
            });
        },
        ajaxPost : function (url,data) {
            $.post(url,data,function (result) {
                console.log(result)
            })
        },
        reloadCaptcha : function (_this) {
            _this.attr("src","{{captcha_src("flat")}}"+Math.random())
        }
    }
</script>
