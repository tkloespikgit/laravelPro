<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests,JsonResponse;

    /*
     * 闪存页面消息
     *
     * */
    protected static function FlashMessages(array $message,$messageType = "warning")
    {
        \Session::flash("FlashMessages",[
            "messages" => $message,
            "type" => $messageType
        ]);
    }
}
