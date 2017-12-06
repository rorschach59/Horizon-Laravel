<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function showAccount()
    {
        $user = Auth::user();
        return view('user/account',  compact('user'));
    }
}
