<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class AuthController extends Controller
{
    public function showLoginPage() {
        return Inertia::render("Auth/Login");
    }
}
