<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;
class AuthController extends Controller
{
    public function showLoginPage(): InertiaResponse
    {
        return Inertia::render('Auth/Login');
    }
}
