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

           function getProduitByType($id){
              $data = DB::table('produits')->where('produits.type_id',$id)->orderBy('produits.id','desc')
                  ->get();
              return $data;
          }

          function addProduit($data){
              DB::table('produits')->insert($data);
          }

          function deleteProduit($id){
              DB::table('produits')->where('id',$id)->delete();
          }

          function updateProduit($id,$data){
              DB::table('produits')->where('id',$id)->update($data);
          }

          function getOneProduit($id){
              $data = DB::table('produits')->where('id',$id)->get();
              return $data;
          }
}
