<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\KelompokMenu\KelompokMenuServices;
use Illuminate\Http\Request;

class KelompokMenuController extends Controller
{
    public KelompokMenuServices $_kelompokMenuServices;

    public function __construct(KelompokMenuServices $kelompokMenuServices)
    {
        $this->_kelompokMenuServices = $kelompokMenuServices;
    }

    public function getAll(Request $request)
    {
        $result = $this->_kelompokMenuServices->getKelompokMenuForHome($request);

        return response()->json(['data' => $result], 200);
    }
}
