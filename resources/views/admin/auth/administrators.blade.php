@extends("layouts.admin")
@section("pageName","设置管理员")
@section("content")
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>
                        创建管理员
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li class="pull-right">
                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <p></p>
                    <form>
                        {{csrf_field()}}
                        <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps">
                                <li>
                                    <a href="#step-1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">基本信息</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">联系方式</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">账号设置</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4">
                                        <span class="step_no">4</span>
                                        <span class="step_descr">角色设置</span>
                                    </a>
                                </li>
                            </ul>
                            <div id="step-1" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstName">名 <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="firstName" required="required"
                                               class="form-control col-md-7 col-xs-12" name="firstName"
                                               onchange="fillName()">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lastName">姓 <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="lastName" required="required"
                                               class="form-control col-md-7 col-xs-12" name="lastName"
                                               onchange="fillName()">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">全名 <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" required="required"
                                               class="form-control col-md-7 col-xs-12" name="name" readonly="">
                                    </div>
                                </div>
                            </div>
                            <div id="step-2" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mobile">电话 <span
                                                class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="mobile" required="required"
                                               class="form-control col-md-7 col-xs-12" name="mobile">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">邮箱 <span
                                                class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="email" required="required"
                                               class="form-control col-md-7 col-xs-12" name="email">
                                    </div>
                                </div>
                            </div>
                            <div id="step-3" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="account">账号 <span
                                                class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="account" required="required"
                                               class="form-control col-md-7 col-xs-12" name="account">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">密码 <span
                                                class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" id="password" required="required"
                                               class="form-control col-md-7 col-xs-12" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="passwordConfirm">确认密码
                                        <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" id="passwordConfirm" required="required"
                                               name="passwordConfirm" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">是否激活 <span
                                                class="required">*</span></label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="">
                                            <label>
                                                <input type="checkbox" class="js-switch" name="active" value="1"
                                                       checked/>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-4" class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="col-md-3 col-sm-3 col-xs-12 control-label">
                                        权限设置
                                    </label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <div class="checkbox">
                                            <label class="">
                                                <div class="icheckbox_flat-green">
                                                    <input type="checkbox" value="1" name="roles[]" class="flat">
                                                    <ins class="iCheck-helper"></ins>
                                                </div>
                                                用户管理
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="">
                                                <div class="icheckbox_flat-green">
                                                    <input type="checkbox" value="2" name="roles[]" class="flat">
                                                    <ins class="iCheck-helper"></ins>
                                                </div>
                                                权限管理
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push("links")
    <link href="{{asset("css/intlTelInput.css")}}" rel="stylesheet">
@endpush
@push("scripts")
    <script src="{{asset("js/intlTelInput.js")}}"></script>
    <script src="{{asset("js/utils.js")}}"></script>
    <script>
        function fillName() {
            $firstName = $("#firstName").val();
            $lastName = $("#lastName").val();
            $("#name").val($firstName + " " + $lastName)
        }

        $("#mobile").intlTelInput({
            allowDropdown: true,
            autoHideDialCode: true,
            autoPlaceholder: "on",
            onlyCountries: ['cn','sg','my'],
            placeholderNumberType: "MOBILE",
            utilsScript: "build/js/utils.js"
        });

    </script>
@endpush