<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
//    protected $role_user_table = 'role_user';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
