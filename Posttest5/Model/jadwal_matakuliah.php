<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table ='jadwalmatakuliah';
    protected $fillable =['mahasiswa_id','ruangan_id','dosenmatakuliah_id'];

     public function mahasiswa(){
    	return $this->belongsTo(mahasiswa::class);
    }

     public function dosen_matakuliah(){
    	return $this->belongsTo(dosen_matakuliah::class);
    }

     public function ruangan(){
    	return $this->belongsTo(ruangan::class);
    }
}
