<?php

namespace App\Repositories;
use App\Utilisateur;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class UtilisateurRepository.
 */
class UtilisateurRepository extends BaseRepository
{


        public function model(){
               // return Utilisateur::class;
          }


    function __construct(){

                $this->model=new Utilisateur();
            }



            function getUtilisateur(){
                $data = DB::table('utilisateurs')->orderBy('utilisateurs.id','desc') ->get();
                return $data;
            }

            function addUtilisateur($data){
                DB::table('utilisateurs')->insert($data);
            }

            function deleteUtilisateur($id){
                DB::table('utilisateurs')->where('id',$id)->delete();
            }

            function updateUtilisateur($id,$data){
                DB::table('utilisateurs')->where('id',$id)->update($data);
            }

            function getOneUtilisateur($id){
                $data = DB::table('utilisateurs')->where('id',$id)->get();
                return $data;
            }
}
