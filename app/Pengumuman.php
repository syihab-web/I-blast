<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengumuman extends Model
{
    protected $table    ='pengumuman';

    protected $fillable = ['judul','isi', 'user_id',];

    public function user(){
        return $this->BelongsTo(User::class);
    }
}
