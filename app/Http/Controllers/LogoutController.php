<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout(); // Log out the user

        // desry session
        session()->flush();
        
        return redirect()->route('login.index')->with('success', 'Logout successful.');
    }
}
