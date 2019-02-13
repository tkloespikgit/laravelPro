@extends("layouts.admin")
@section("pageName","权限设置")
@section("content")
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-bars"></i> 权限设置</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="col-xs-3">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left">
                        <li class="active">
                            <a href="#list" data-toggle="tab">权限列表</a>
                        </li>
                        <li>
                            <a href="#create" data-toggle="tab">添加权限</a>
                        </li>
                    </ul>
                </div>

                <div class="col-xs-9">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="list">
                            <table class="table table-striped">
                                <tr>
                                    <th>ID</th>
                                    <th>权限名称</th>
                                    <th>关键字</th>
                                    <th>描述</th>
                                    <th>操作</th>
                                </tr>
                                @foreach($permissions as $key => $value)
                                    <tr>
                                        <td>{{$value ->id}}</td>
                                        <td>{{$value ->display_name}}</td>
                                        <td>{{$value ->name}}</td>
                                        <td>{{$value ->description}}</td>
                                        <td>
                                            <a href="{{url("auth/permissions/edit",[$value->id])}}" title="编辑"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="tab-pane" id="create">
                            <form method="post" class="form-horizontal form-label-left">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">关键字</label>
                                    <div class="col-md-6 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="keywords" placeholder="关键字">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">权限名称</label>
                                    <div class="col-md-6 col-sm-9 col-xs-12">
                                        <input type="text" class="form-control" name="displayName" placeholder="权限名称">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">描述</label>
                                    <div class="col-md-6 col-sm-9 col-xs-12">
                                        <textarea name="description" placeholder="描述" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="col-md-8 col-sm-12 col-xs-12 col-md-offset-2">
                                    <input type="submit" value="提交" class="btn btn-success btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection