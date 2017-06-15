<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['title','author_id','amount'];
    protected function books()
    {
    	return $this->belongsTo('App\Author');
    }
}
