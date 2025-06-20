<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use function view;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.registration');
    }
}
