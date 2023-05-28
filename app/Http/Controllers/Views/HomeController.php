<?php

namespace App\Http\Controllers\Views;

use App\Http\Controllers\Controller;
use App\Services\KelompokMenu\KelompokMenuServices;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class HomeController extends Controller
{
    public KelompokMenuServices $_kelompokMenuServices;

    public function __construct(KelompokMenuServices $kelompokMenuServices)
    {
        $this->_kelompokMenuServices = $kelompokMenuServices;
    }

    public function showHomePage(Request $request): InertiaResponse
    {
        $kelompokMenu = $this->_kelompokMenuServices->getKelompokMenuForHome($request);

        return Inertia::render('Protected/Home', [
            'klp_menu' => $kelompokMenu
        ]);
    }
}
