<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="icon" href="{{asset("favicon.ico")}}" type="image/ico"/>
    <title>@yield("title",config("app.name"))</title>
    @include("include.adminLinks")
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{route("adminPortal")}}" class="site_title"><i class="fa fa-paw"></i>
                        <span>{{config("app.name")}}</span></a>
                </div>
                <div class="clearfix"></div>
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="{{asset("image/img.jpg")}}" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>欢迎,</span>
                        <h2>{{auth("admin")->user()->name}}</h2>
                    </div>
                </div>
                <br/>
                {{--左侧菜单--}}
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i>首页<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url("index")}}">用户统计</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-envelope-o"></i>邮件模板<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url("emailTemplate/create")}}">创建模板</a></li>
                                    <li><a href="{{url("emailTemplate/list")}}">邮件列表</a></li>
                                    <li><a href="{{url("emailTemplate/testAck")}}">邮件测试</a></li>
                                    <li><a href="{{url("emailTemplate/add/testAccount")}}">添加测试邮箱</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-sitemap"></i>权限管理<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url("auth/permissions/manage")}}">设置操作权限</a></li>
                                    <li><a href="{{url("auth/roles/manage")}}">设置管理组</a></li>
                                    <li><a href="{{url("auth/administrators/manage")}}">设置管理员</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-users"></i>用户管理<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url("users/list")}}">用户列表</a></li>
                                    <li><a href="{{url("users/create")}}">创建用户</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-users"></i>系统设置<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="{{url("system/phpinfo")}}" target="_blank">PHPinfo</a></li>
                                    <li><a href="{{url("system/language/manage")}}">语言包管理</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                {{--左侧菜单--}}

                {{--菜单底部按钮--}}
                {{--<div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>--}}
            </div>
        </div>

        {{--顶部导航--}}
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="{{asset("image/img.jpg")}}" alt="">
                                {{auth("admin")->user()->name}}
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li>
                                    <a href="javascript:;"><i class="fa fa-edit pull-right"></i><span>编辑信息</span></a>
                                </li>
                                <li>
                                    <a href="{{asset("logout")}}"><i class="fa fa-sign-out pull-right"></i>退出登录</a>
                                </li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">6</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="{{asset("image/img.jpg")}}" alt="Profile Image"/></span>
                                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="right_col" role="main">
            <div class="row">
                <div class="page-title">
                    <div class="title_left">
                        <h4>@yield("pageName","Admin Portal")</h4>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                @yield("content")
            </div>
        </div>
        <footer>
            <div class="pull-right">
                TobyChan Admin-portal
            </div>
            <div class="clearfix"></div>
        </footer>
    </div>
</div>
@include("include.adminScript")
<script>
    @if(Session::has("FlashMessages"))
    @foreach(Session::get('FlashMessages')["messages"] as $message)
    system.notify('{{$message}}','{{Session::get("FlashMessages")["type"]}}');
    @endforeach
    @endif
</script>
@stack("scripts")
</body>
</html>
