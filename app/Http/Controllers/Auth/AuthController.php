<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\Auth\AuthServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    public AuthServices $_authServices;

    public function __construct(AuthServices $authServices)
    {
        $this->_authServices = $authServices;
    }

    public function signIn(LoginRequest $request): void
    {
        $request->validated();

        $this->_authServices->signIn($request);
    }

    public function signOut(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::route('page.login');
    }

    public function setKelompokMenu(Request $request): RedirectResponse
    {
        $request->session()->put('modules', $request->input('kode_klp_menu'));

        return Redirect::route('page.main');
    }
}
