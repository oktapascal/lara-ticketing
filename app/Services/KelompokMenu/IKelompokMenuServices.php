<?php

namespace App\Services\KelompokMenu;

use App\Repositories\KelompokMenu\KelompokMenuRepositories;
use Illuminate\Http\Request;

class IKelompokMenuServices implements KelompokMenuServices
{
    public KelompokMenuRepositories $_kelompokMenuRepositories;

    public function __construct(KelompokMenuRepositories $kelompokMenuRepositories)
    {
        $this->_kelompokMenuRepositories = $kelompokMenuRepositories;
    }

    public function getKelompokMenuForHome(Request $request)
    {
        $user = $request->user();

        return $this->_kelompokMenuRepositories->getKelompokMenuForHome($user['kode_lokasi']);
    }
}
