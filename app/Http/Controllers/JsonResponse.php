<?php

namespace App\Http\Controllers;

use Response;

trait JsonResponse
{

    protected $status = true;

    protected $httpCode = 200;

    protected $message = "请求成功!";

    protected $data = null;

    protected $headers = [];

    public function getStatus()
    {
        return $this->status;
    }

    public function getHttpCode()
    {
        return $this->httpCode;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getHeaders()
    {
        return $this->headers;
    }


    public function setStatus(bool $status = true)
    {
        $this->status = $status;
        return $this;
    }

    public function setHttpCode($httpCode = 200)
    {
        $this->httpCode = $httpCode;
        return $this;
    }

    public function setMessage($message = null)
    {
        $this ->message = $message ?? "请求成功！";
        return $this;
    }

    public function setData($data = null)
    {
        $this->data = $data;
        return $this;
    }

    public function setHeaders($headers = null)
    {
        $this->headers = $headers;
        return $this;
    }

    public function respond()
    {
        $response = [
            'status' => $this->status,
            'data' => $this->data,
            'message' => $this->message
        ];
        return Response::json($response, $this->httpCode, array_merge($this->headers,[
            'Access-Control-Expose-Headers' => 'Authorization',
            'Cache-Control' => 'no-store',
        ]));
    }

    public function badRespond($message = null,$data = null ,$status = false)
    {
        if ($message !== null) $this ->setMessage($message);

        return $this ->setStatus($status)->setData($data)->respond();
    }

    public function successRespond($data = null ,$message = null)
    {
        return $this ->setData($data) ->setMessage($message) ->setStatus(true)->respond();
    }
}