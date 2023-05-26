<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\AuthServices;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public AuthServices $_authServices;

    public function __construct(AuthServices $authServices)
    {
        $this->_authServices = $authServices;
    }

    public function signIn(LoginRequest $request): RedirectResponse
    {
        $data = $request->validated();

//        $this->_authServices->signIn($data);

        return Redirect::route("test");
    }
}
