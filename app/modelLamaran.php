<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelLamaran extends Model
{
    protected $table = 'lamaran';
    protected $primaryKey = 'id_lamaran';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['judul','kategori','lokasi','nama','email','cp','data_akademik','organisasi','kemampuan'];
}
