<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{

	 protected $fillable = [
        'name', 'description', 'price', 'img' , 'developer_id' , 'category_id'
    ];
    protected $table = 'apps';
}
