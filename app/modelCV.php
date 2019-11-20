<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelCV extends Model
{
    protected $table = 'cv';
    protected $primaryKey = 'id_cv';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['nama', 'data_akademik', 'organisasi', 'kemampuan', 'id_user'];

    protected $guarded = [];
}
