<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     //Table Name
     protected $table = 'categories';
     //Primary Key
      public $primaryKey = 'id';
     //Timestamps
     public $timestamps = true;

    public function products(){

        return $this->hasMany('App\Product','cat_id');
    }

}
