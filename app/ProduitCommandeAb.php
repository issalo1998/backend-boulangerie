<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProduitCommandeAb extends Model
{
     protected $guarded=[];

       public function produit(){
          return  $this->belongsTo('App\Produit');
       }

         public function commandeabonne(){
            return  $this->belongsTo('App\CommandeAbonne');
         }
}
