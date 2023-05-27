<?php
namespace App\Services\Auth;

use App\Http\Requests\Auth\LoginRequest;

interface AuthServices
{
    public function signIn(LoginRequest $request);
}
