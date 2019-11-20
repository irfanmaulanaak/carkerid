<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelAdmin extends Model
{
    protected $table = 'admin_perusahaan';
    protected $primaryKey = 'id_admin';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['username', 'nama', 'email', 'noTelp', 'password'];

    protected $guarded = [];
}
