<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowTask extends Model
{
    protected $table = 'tasks';
    protected $primaryKey = 'id';
  	public function user()
    {
           return $this->belongsTo('App\User');
    }
}
