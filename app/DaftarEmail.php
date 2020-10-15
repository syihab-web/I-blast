<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DaftarEmail extends Model
{
    protected $table = "daftaremail";
 
    protected $fillable = ['email','nama'];
}
