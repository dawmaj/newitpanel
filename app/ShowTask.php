<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowTask extends Model
{
    protected $table = 'tasks';

    public function showtask()
    {
           return $this->hasOne('App\User', 'id');
    }
}
