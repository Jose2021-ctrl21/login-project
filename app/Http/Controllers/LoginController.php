<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\LoginUser;

class LoginController extends Controller
{
    public function login(Request $request){
        // dd($request->all());

        $data = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        

        $loginuser = LoginUser::where('username', $data['username'])->first();
    
        if ($loginuser && md5($data['password']) === $loginuser->password) {
            session(['username' => $loginuser->username]);
            return redirect(route('dashboard'))->with('success', 'Login successful.');
        }
         else {
            return redirect()->back()->with('error', 'Login failed.');
        }
    }
}
