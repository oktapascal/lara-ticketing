<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class HomeController extends Controller
{
    public function showHomePage(): InertiaResponse
    {
        return Inertia::render('Protected/Home');
    }
}
