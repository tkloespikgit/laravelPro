<?php

namespace App\Http\Controllers\Admin;

use App\Model\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\Types\Self_;
use PHPUnit\Util\RegularExpression;

class AuthController extends Controller
{
    //
    protected function loginValidator($data)
    {
        return \Validator::make($data, [
            "account" => "required|exists:admins,account",
            "password" => "required",
//            "captcha" => "required|captcha"
        ]);
    }

    protected function grantAuthorization(array $authenticate)
    {
        return \Auth::guard("admin")->attempt($authenticate);
    }

    protected function loginRedirect()
    {
        return redirect()->intended("index");
    }

    public function login(Request $request)
    {
        if ($request->isMethod("get")) {
            return view("admin.auth.login");
        } else {
            $validator = $this->loginValidator($request->all());
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } elseif ($this->grantAuthorization(["account" => $request->input("account"), "password" => $request->input("password"), "active" => 1])) {
                return $this->loginRedirect();
            } else {
                $validator->errors()->add("account", trans("auth.failed"));
                return redirect()->back()->withErrors($validator)->withInput();
            }
        }
    }


    public function administratorsManage(Request $request)
    {
        if ($request->isMethod("get")) {
            return view("admin.auth.administrators");
        } else {
            dd($request->all());
        }

    }


    private function createPermissionValidator(array $data)
    {
        return \Validator::make($data,[
            "keywords" => "required|unique:permissions,name",
            "displayName" => "required",
            "description" => "required",
        ]);
    }

    public function permissionsManage(Request $request)
    {
        $permissions = Permission::all();
        if ($request->isMethod("get")) {
            return view("admin.auth.permissions", compact("permissions"));
        } else {
            $validator = $this ->createPermissionValidator($request ->all());
            if ($validator ->fails()) {
                self::FlashMessages($validator ->errors()->all());
                return redirect() ->back();
            } else {
                Permission::create([
                    "name" => $request ->keywords,
                    "display_name" => $request ->displayName,
                    "description" => $request -> description
                ]);
                self::FlashMessages(["创建成功"],"success");
                return redirect() ->back();
            }
        }
    }
}
