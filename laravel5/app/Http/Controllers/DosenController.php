<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class DosenController extends Controller
{
     public function awal()
    {
        return "INI HALAMAN DOSEN _";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $dosen = new Dosen();
        $dosen->nama   = 'H.Arif Rahman Hakim';
        $dosen->nip    = '1515015224121215';
        $dosen->alamat = 'Jln. Pemuda 4';
        $dosen->pengguna_id = '7';
        $dosen->save();
        return "Data Dosen dengan nama {$dosen->nama} telah tersimpan di dalam database";
    }
}
