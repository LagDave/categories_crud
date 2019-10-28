<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public $guarded = ['id'];
    public function category(){
        return $this->belongsTo('App\Category');
    }
}
