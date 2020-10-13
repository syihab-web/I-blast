<?php
namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Observers\UserActionsObserver;

/**
 * Class Role
 *
 * @package App
 * @property string $title
*/
class Role extends Model
{

    protected $fillable = ['title'];

    public static function boot()
    {
        parent::boot();

        Role::observe(new UserActionsObserver);
    }

}
