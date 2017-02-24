<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $fillable = ['id','path','product_id'];

    public function product(){
    	return $this->belongsTo('App\Product');
    }
}
