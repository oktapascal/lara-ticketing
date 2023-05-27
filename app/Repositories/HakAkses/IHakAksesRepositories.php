<?php

namespace App\Repositories\HakAkses;

use Illuminate\Support\Facades\DB;

class IHakAksesRepositories implements HakAksesRepositories
{

    public function getUserByUsername(string $username)
    {
        $query = "select a.nik username, a.password, a.kode_lokasi
        from hakakses a
        where a.nik = ?";

        $result = DB::select($query, [
            $username
        ]);

        if(empty($result)) {
            return NULL;
        }

        return $result[0];
    }
}
