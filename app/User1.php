<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    protected $connection = 'mysql';
    protected $table = 'users';
}
