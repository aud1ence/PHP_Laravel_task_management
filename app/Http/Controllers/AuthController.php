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

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if ($email == 'test' && $password == '123') {
            $request->session()->push('login', true);
//            dd($request->session());
            return redirect()->route('master');
        }
        $message = 'Login failed. Email or password wrong';
        $request->session()->flash('login-fail', $message);

        return view('login');
    }

    public function showMaster(Request $request)
    {
        if ($request->session()->has('login') && $request->session()->get('login')) {
            return view('master');
        }

        $message = 'Please login';
        $request->session()->flash('not-login', $message);
        return view('login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return view('welcome');
    }
}
