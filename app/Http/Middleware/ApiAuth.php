<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class ApiAuth extends BaseMiddleware
{
    public function handle($request, Closure $next)
    {
        try{
            $this->checkForToken($request);
            try {
                $token = $this->auth->parseToken();
                try {
                    if ($token ->authenticate()){
                        return $next($request);
                    } else {
                        $errors = "Privilege grant failed !";
                    }
                } catch (TokenExpiredException $expiredException) {
                    try {
                        $token = $this->auth->refresh();
                        $sub = $this->auth->manager()->getPayloadFactory()->buildClaimsCollection()->toPlainArray()['sub'];
                        Auth::guard('api')->onceUsingId($sub);
                        $request->attributes ->add(['Authorization' => $token,'sub' => $sub]);
                    } catch (\Exception $exception) {
                        $errors = "Privilege grant failed !";
                    }
                } catch (UnauthorizedHttpException $exception) {
                    $errors = "Privilege grant failed !";
                }
            } catch (JWTException $exception) {
                $errors = "Privilege grant failed !";
            }
        } catch (UnauthorizedHttpException $exception) {
            $errors = "Privilege grant failed !";
        }
        if (isset($errors)) {
            return response()->json(['status' => false, 'msg' => $errors, 'info' => null], 401);
        } else {
            return $this->setAuthenticationHeader($next($request), $token);
        }
    }
}
