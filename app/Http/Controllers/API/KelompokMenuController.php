<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\KelompokMenu\KelompokMenuServices;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class KelompokMenuController extends Controller
{
    public KelompokMenuServices $_kelompokMenuServices;

    public function __construct(KelompokMenuServices $kelompokMenuServices)
    {
        $this->_kelompokMenuServices = $kelompokMenuServices;
    }

    public function getAll(Request $request): JsonResponse
    {
        $result = $this->_kelompokMenuServices->getKelompokMenuForHome($request);

        return response()->json(['result' => $result], 200);
    }
}
