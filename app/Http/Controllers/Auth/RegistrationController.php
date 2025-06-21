<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function dd;
use function response;
use function view;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.registration');
    }

    public function store(Request $request)
    {

        try
        {
            $user               = new User();
            $user->first_name   = $request->input('first_name');
            $user->last_name    = $request->input('last_name');
            $user->phone        = $request->input('phone');
            $user->email        = $request->input('email');
            $user->password     = $request->input('password');
            $user->save();

            return response()->json([
               'status' => 'success',
               'message'=> 'User Registration Successfully',
                'user'  => $user
            ], 200);


        }catch (Exception $e){
            return response()->json([
               'status' => 'failed',
               'message'=> $e->getMessage()
            ]);
        }
    }
}
