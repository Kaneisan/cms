<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_depan', 'nama_belakang', 'nis', 'alamat', 'created_at', 'updated_at'];
    public $timestamps = true;

}
