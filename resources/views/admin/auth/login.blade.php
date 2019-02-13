<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config("app.name")}} admin portal</title>
    @include("include.adminLinks")
</head>
<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form" style="top: 90px;">
            <section class="login_content">
                <form method="post">
                    {{csrf_field()}}
                    <h1>登录</h1>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="account">账号：<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="account" required="required" name="account" class="form-control col-md-12 col-xs-12" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">密码：<span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="password" id="password" required="required" name="password" class="form-control col-md-12 col-xs-12">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="captcha">验证码：<span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-6">
                            <input type="text" id="captcha" required="required" name="captcha" class="form-control col-md-12 col-xs-12">
                        </div>
                        <div class="col-md-5 col-sm-5 col-xs-6">
                            <img src="{{captcha_src('flat')}}" style="width: 125px;height: 35px" onclick="system.reloadCaptcha($(this))">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div>
                        <input type="submit" value="登录" class="btn btn-success">
                        <a class="reset_pass" href="javascript:void(0);" onclick="system.notify('如果您忘记登录密码，请及时与技术人员联系找回！')">忘记密码?</a>
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                    <div class="separator">
                        <div>
                            <p>©2016 All Rights Reserved. {{config("app.name")}}. Privacy and Terms</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
@include("include.adminScript")
@push("scripts")
    <script>
        @foreach($errors ->all() as $message)
            system.notify("{{$message}}");
        @endforeach
    </script>
@endpush
</html>