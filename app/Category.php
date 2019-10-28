<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $guarded = [];
    public function subCategories(){
        return $this->hasMany('App\SubCategory');
    }
}
