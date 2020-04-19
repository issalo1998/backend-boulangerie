<?php

namespace App\Repositories;
use App\Profil;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class ProfilRepository.
 */
class ProfilRepository extends BaseRepository
{

          public function model(){
               // return Profil::class;
          }
        function __construct(){

            $this->model=new Profil();
        }


        function getProfil(){
            $data = DB::table('profils')->orderBy('profils.id','desc')->get();
            return $data;
        }

        function addProfil($data){
            DB::table('profils')->insert($data);
            
        }

        function deleteProfil($id){
            DB::table('profils')->where('id',$id)->delete();
        }

        function updateProfil($id,$data){
            DB::table('profils')->where('id',$id)->update($data);
        }

        function getOneProfil($id){
            $data = DB::table('profils')->where('id',$id)->get();
            return $data;
        }
}
