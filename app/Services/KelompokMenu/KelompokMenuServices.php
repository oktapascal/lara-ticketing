<?php

namespace App\Services\KelompokMenu;

use Illuminate\Http\Request;

interface KelompokMenuServices
{
    public function getKelompokMenuForHome(Request $request);
}
