<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function response;

class AuthController extends Controller
{
    public function registration(RegisterRequest $request)
    {
        $user = User::create([
           'first_name' => $request->first_name,
           'last_name' => $request->last_name,
           'phone' => $request->phone,
           'email' => $request->email,
           'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'status' => true,
            'message' => 'User registered successfully',
            'data' => [
                'user' => $user,
            ],
        ], 200);
    }


    public function login(Request $request)
    {
        $credential = $request->only('email', 'password');

        $token = Auth::guard('api')->attempt($credential);

        if (!$token)
        {
            return response()->json([
               'status' => false,
               'message'=>'Unauthorized',
                'data' => null
            ], 401);
        }

        $data = [
          'token' => $token,
          'token_type' => 'bearer',
            'user' => \auth('api')->user()
        ];

        return response()->json([
            'stats' => true,
            'message' => 'User Login Successfully',
            'data' => $data
        ], 200);
    }


    public function logout()
    {
        $user = \auth()->guard('api')->logout();

        return response()->json([
            'status' => true,
            'message'=> 'Logout Successfully',
        ], 200);
    }

}
