<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [ 'title', 'body', 'category_id'];

    public function image(){
    	return $this->hasOne('App\Image');
    }

    public function category(){
    	return $this->belongsTo('App\Category');
    }
}
