<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mahasiswa;
use App\Pengguna;
class MahasiswaController extends Controller
{
   public function awal()
    {
        $semuaMahasiswa = Mahasiswa::all();
        return view('mahasiswa.awal',compact('semuaMahasiswa'));
    }
    public function tambah()
    {
        return view('mahasiswa.tambah');
    }
    public function simpan(Request $input)
    {
        $pengguna = new Pengguna($input->only('username', 'password'));
    if($pengguna->save()){
    $mahasiswa = new mahasiswa;
    $mahasiswa->nama = $input->nama;
    $mahasiswa->nim = $input->nim;
    $mahasiswa->alamat = $input->alamat;
    //$mahasiswa->pengguna_id = $input->pengguna_id;
    if($pengguna->mahasiswa()->save($mahasiswa)) 
        $this->informasi = 'Berhasil simpan data';
    }
    return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
    }
    public function lihat($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
    }
   public function update($id, Request $input)
    {
        $mahasiswa = mahasiswa::find($id);
        $pengguna = $mahasiswa->pengguna;
        $mahasiswa->nama = $input->nama;
        $mahasiswa->nim = $input->nim;
        $mahasiswa->alamat = $input->alamat;
        //$mahasiswa->pengguna_id = $input->pengguna_id;
        $mahasiswa->save();
            $pengguna->fill($input->only('username'));
            if (!empty($input->password)){
                $pengguna->password = $input->password;
            }
            if ($pengguna->save()){
                $this->informasi = 'Berhasil simpan data';
            }
            else{
                $this->informasi = 'Gagal Simpan Data';
            }
        return redirect('mahasiswa')->with(['informasi' => $this-> informasi]);
    }
     public function hapus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if($mahasiswa->pengguna()->delete()){
            if($mahasiswa->delete()) 
                $this->informasi = 'Berhasil hapus data';
            return redirect('mahasiswa')-> with(['informasi'=>$this->informasi]);
        }
    }
}