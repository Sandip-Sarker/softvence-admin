<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function view;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
}
