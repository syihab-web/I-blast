<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artikel extends Model
{

    use SoftDeletes;
    //untuk mengarahkan nama tabel yang benar
    protected $table    ='artikel';

    protected $fillable = ['judul','konten', 'foto','user_id','slug'];

    public function user(){
        return $this->BelongsTo(User::class);
    }

}
