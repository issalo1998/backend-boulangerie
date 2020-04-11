<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
     protected $guarded=[];

      public function produitcommandes(){
             return  $this->hasMany('App\ProduitCommande');
           }
}
