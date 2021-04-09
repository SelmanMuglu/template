<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

}
