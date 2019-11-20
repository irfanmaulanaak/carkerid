<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelPekerjaan extends Model
{
    protected $table = 'pekerjaan';
    protected $primaryKey = 'id_pekerjaan';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['judul','kategori','lokasi','deskripsi','syarat','cp','email','id_user','id_admin'];

    protected $guarded = [];
}
