<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelUser extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = ['username', 'nama', 'email', 'noTelp', 'password'];


}
