<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $guarded=[];

    public function produitcommandeabs(){
         return  $this->hasMany('App\ProduitCommandeAb');
       }

        public function produitcommandes(){
            return  $this->hasMany('App\ProduitCommande');
          }
}
