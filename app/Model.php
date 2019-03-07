<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //this is used to tell laravel that it can post the information I allow it to in my store methods to the DB
    //If I didn't do this I could not store to the DB because of Laravel's built in security
    //No fields will allowed to be stored except the ones I mention in my store methods

    protected $guarded = [];
}
