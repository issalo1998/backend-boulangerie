<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historique extends Model
{
     protected $guarded=[];

       public function farine(){
          return  $this->belongsTo('App\Farine');
       }
}
