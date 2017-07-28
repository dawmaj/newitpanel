<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddTask extends Model
{
	protected $table = 'tasks';
    protected $data = ['user_id','issue', 'section', 'about', 'description'];
}
