<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view('login');
    }

    public function checkLogin(Request $request)
    {
//        dd($request->email);
        if (isset($request->email) && isset($request->password)) {
            $email = $request->email;
            $password = $request->password;

            if ($email == 'ngan@gmail.com' && $password == '123') {
                return redirect()->route('user.index');
            } else {
                return redirect()->route('login');
            }
        }

    }
}
