<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommandeAbonne extends Model
{
     protected $guarded=[];

     public function produitcommandeabs(){
         return  $this->hasMany('App\ProduitCommandeAb');
       }

         public function abonne(){
            return  $this->belongsTo('App\Abonne');
         }
}
