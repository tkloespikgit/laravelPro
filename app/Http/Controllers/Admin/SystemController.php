<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SystemController extends Controller
{
    //

    public function phpinfo()
    {
        return view("admin.system.phpinfo");
    }

    public function languageManage()
    {
        $default = config("app.locale");
        return view("admin.system.languages",compact("default"));
    }
}
