<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\jadwal_matakuliah;


class JadwalMatakuliahController extends Controller
{
    public function awal()
    {
        return "HALAMAN JADWAL MATAKULIAH_____";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $jadwa_matakuliah = new Jadwa_Matakuliah();
        $jadwa_matakuliah->mahasiswa_id   = '1';
        $jadwa_matakuliah->ruangan_id   = '1';
        $jadwa_matakuliah->dosen_matakuliah_id    = '4';
        $jadwa_matakuliah->save();
        return "Data Jadwal yang mengajar telah tersimpan di dalam database";
    }
}
