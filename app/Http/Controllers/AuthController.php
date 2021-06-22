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
            $email = $request->input('email') ;
            $password = $request->input('password') ;

            if ($email == 'test' && $password == '123') {
                $request->session()->push('login', true);
                return redirect()->route('tasks.index');
            }
            $message = 'Login failed. Email or password wrong';
            $request->session()->flash('login-fail', $message);

            return view('login');
        }

}
