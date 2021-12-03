<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request){
        if ($request->isMethod('post')){
            if (Auth::attempt($request->only('email', 'password'))) {
                return redirect()->route('bid.index');
            }

            return redirect()->back()->with('error', 'Неправильный логин или пароль!');
        }

        return view('layouts.authentication');
    }


}
