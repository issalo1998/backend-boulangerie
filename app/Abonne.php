<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class abonne extends Model
{
     protected $guarded=[];

     public function commandeabonnees(){
        return  $this->hasMany('App\CommandeAbonne');
      }
}
