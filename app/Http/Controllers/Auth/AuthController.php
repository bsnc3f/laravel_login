<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @return view
     */
    public function showLogin()
    {
        return view('login.login_form');
    }
    /**
     * @param App\Http\Request\LoginFormRequest
     * request
     */
    public function login(LoginFormRequest $request)
    {
        dd($request->all());
    }
    //
}
