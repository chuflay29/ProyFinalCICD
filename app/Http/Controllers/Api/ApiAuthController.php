<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ApiAuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if ($validator->fails()) {
            $message = '';
            if ($validator->errors()->has('email')) {
                $message .= __('Email') . ': ' . $validator->errors()->first('email');
            } elseif ($validator->errors()->has('password')) {
                $message .= __('Contraseña') . ': ' . $validator->errors()->first('password');
            }
            return response()->json([
                'status' => false,
                'msg' => $message
            ]);
        }

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'msg' => __('bad_credentials'),
            ]);
        }
        /*if ($user->active != 'active') {
            return response()->json([
                'status' => false,
                'msg' => __('user_no_active'),
            ]);
        }*/

        $token = $user->createToken($user->email)->plainTextToken;

        return response()->json([
            'status' => true,
            'msg'    => 'Se generó el token correctamente.',
            'token'  => $token,
            'data'   =>  new UserResource($user)
        ]);
    }

    public function logout(Request $request)
    {
        //$request->user()->currentAccessToken()->delete();
        $request->user()->tokens()->delete();

        return response()->json([
            'status' => true,
            'msg' => 'La sesión se cerró correctamente.',
        ]);
    }
}
