<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table ='dosenmatakuliah';
    protected $fillable =['dosen_id','matakuliah_id'];

     public function dosen(){
    	return $this->belongsTo(dosen::class);
    }

    public function matakuliah(){
    	return $this->belongsTo(matakuliah::class);
    }

    public function jadwal_matakuliah(){
    	return $this->hasMany(jadwal_matakuliah::class, 'dosen_matakuliah_id');
    }
}
