<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $table = 'email';

    protected $fillable = ['from', 'to', 'subject', 'pesan', 'image', 'file'];
}
