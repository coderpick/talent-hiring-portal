<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserDashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function profile()
    {
        $user = User::where('id', Auth()->user()->id)->first();

        return view('user.profile', compact('user'));
    }
}
