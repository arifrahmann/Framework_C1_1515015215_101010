<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen_matakuliah;

class DosenMatakuliahController extends Controller
{
   public function awal()
    {
        return "HALAMAN DOSEN MATAKULIAH__";
    }

    public function tambah()
    {
        return $this->simpan();
    }

    public function simpan()
    {
        $dosen_matakuliah = new Dosen_Matakuliah();
        $dosen_matakuliah->dosen_id   = '1';
        $dosen_matakuliah->matakuliah_id    = '1';
        $dosen_matakuliah->save();
        return "Data Dosen yang mengajar telah tersimpan di dalam database";
    }
}
