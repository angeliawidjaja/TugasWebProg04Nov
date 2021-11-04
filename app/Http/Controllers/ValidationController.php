<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{

    public function createRegisterPage() {
        return view('register');
    }

    public function createLoginPage() {
        return view('login');
    }

    public function validateRegister(Request $request) {
        $request->validate(
            [
                'Nama'       => 'required|min:4|max:21',
                'Usia'       => 'required|numeric|gt:17',
                'Email'      => 'required',
                'Password'   => 'required|min:9|alpha_num'
            ]
        );

        return view('home');
    }

    public function validateLogin(Request $request) {
        $request->validate(
            [
                'Email'      => 'required|email',
                'Password'   => 'required|min:9|alpha_num'
            ]
        );

        return view('home');
    }

}