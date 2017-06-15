<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable=['name'];
    protected function books()
    {
    	return $this->hasMany('App\Book');
    }
}
