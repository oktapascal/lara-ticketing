<?php

namespace App\Services\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Repositories\HakAkses\HakAksesRepositories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class IAuthServices implements AuthServices
{
    public HakAksesRepositories $_hakAksesRepositories;

    public function __construct(HakAksesRepositories $hakAksesRepositories)
    {
        $this->_hakAksesRepositories = $hakAksesRepositories;
    }

    public function signIn(LoginRequest $request)
    {
        $user = $this->_hakAksesRepositories->getUserByUsername($request->input('username'));

        if(is_null($user)) {
            return Redirect::route('page.login')
                ->withErrors(['message' => 'Username tidak terdaftar'], 'username');
        }

        if(!Hash::check($request->input('password'), $user->password)) {
            return Redirect::route('page.login')
                ->withErrors(['message' => 'Password salah'], 'password');
        }

        $credentials = [
            "nik" => $user->username,
            "password" => $request->input('password')
        ];

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return Redirect::route('page.home');
        }
    }
}
