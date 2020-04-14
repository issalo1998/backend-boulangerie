<?php

namespace App\Repositories;
use App\Produit;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class ProduitRepository.
 */
class ProduitRepository extends BaseRepository
{

                public function model(){
                   // return Produit::class;
                  }


                function __construct(){

                        $this->model=new Produit();
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
