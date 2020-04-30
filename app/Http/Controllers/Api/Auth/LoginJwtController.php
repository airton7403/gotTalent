<?php

namespace App\Http\Controllers\Api\Auth;

use App\Api\ApiMessages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginJwtController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->all(['email', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            $message = new ApiMessages(trans('auth.failed'));
            return response()->json($message->getMessage(), 401);
        }

        return $this->respondWithToken($token);
    }

    public function logout()
    {
        try {
            auth('api')->logout();
            return response()->json(['message' => trans('auth.logout')], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => trans('error.failed'), 'error' => $th->getMessage()], 200);
        }
    }

    public function me()
    {
        try {
            return response()->json(auth('api')->user());
        } catch (\Throwable $th) {
            return response()->json(['message' => trans('error.failed'), 'error' => $th->getMessage()], 200);
        }
    }

    public function refresh()
    {
        try {
            return $this->respondWithToken(auth('api')->refresh());
        } catch (\Exception $th) {
            $error = $th->getMessage();

            if ($th->getMessage() == 'The token has been blacklisted') {
                $error = trans('auth.token_in_blacklist');
            }

            return response()->json(['message' =>  trans('error.failed'), 'error' => $error], 200);
        }
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
