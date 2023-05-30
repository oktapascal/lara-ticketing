<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;
use Illuminate\Http\RedirectResponse;

class MainController extends Controller
{
    public function showMainPage(Request $request): InertiaResponse|RedirectResponse
    {
        $user = $request->user();

        if(!$request->session()->get('modules')) {
            return Redirect::route('page.home');
        }

        if(is_null($user['path_view'])) {
            return Inertia::render('Static/DashboardUnset');
        }

        return Inertia::render('Protected/'.$user['path_view']);
    }
}
