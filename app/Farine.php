<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class farine extends Model
{
     protected $guarded=[];

     public function historiques()(){
         return  $this->hasMany('App\Historique');
       }
}
