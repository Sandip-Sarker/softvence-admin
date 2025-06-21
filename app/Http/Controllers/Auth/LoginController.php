<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function view;
use Tymon\JWTAuth\Facades\JWTAuth;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

}
