<?php

namespace App\Repositories\KelompokMenu;

use Illuminate\Support\Facades\DB;

class IKelompokMenuRepositories implements KelompokMenuRepositories
{

    public function getKelompokMenuForHome($kodeLokasi): array
    {
        $query = 'select a.kode_klp kode_klp_menu, a.nama nama_klp_menu
        from menu_klp a
        where a.kode_lokasi = ?';

        return DB::select($query, [
            $kodeLokasi
        ]);
    }
}
