<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
        return "HALAMAN MAHASISWA____";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $mahasiswa = new Mahasiswa();
        $mahasiswa->nama   = 'Arif Rahman Hakim';
        $mahasiswa->nim    = '1515015215';
        $mahasiswa->alamat = 'Jln. Pemuda 4';
        $mahasiswa->pengguna_id = '1';
        $mahasiswa->save();
        return "Data Mahasiswa dengan nama {$mahasiswa->nama} telah tersimpan di dalam database";
    }
}
