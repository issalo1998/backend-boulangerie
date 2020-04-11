<?php

namespace App\Repositories;
use App\Vague;
use Illuminate\Support\Facades\DB;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class VagueRepository.
 */
class VagueRepository extends BaseRepository
{

            public function model(){
               // return Vague::class;
            }

            function __construct(){
                $this->model=new Vague();
            }



        function getProdByType($id)
        {
            $data = DB::table('produits')->where('type_id', $id)->get();
            return $data;
        }
        function addVague($data){
            DB::table('vagues')->insert($data);
        }

        function updateVague($id,$data){
            DB::table('vagues')->where('id',$id)->update($data);
        }

        function addIntermediaire($data){
            foreach($data as $inter){
                DB::table('intermediaires')->insert($inter);
            }

        }

        function getVague($id)
        {
            $data = DB::table('vagues')
                ->join('types', 'types.id', '=', 'vagues.type_id')
                ->where('vagues.type_id',$id)
                ->select('vagues.type_id','vagues.horaire','vagues.id','vagues.somme','vagues.description','vagues.created_at','types.libelle')
                ->orderBy('vagues.id','desc')
                ->get();
            return $data;
        }
        function deleteVague($id){
            DB::table('vagues')->where('id',$id)->delete();
        }

        function getOneVague($id){
            $data=DB::table('vagues')->where('id',$id)->get();
            return $data;
        }

        function getIntermediaires($id){
            $data=DB::table('intermediaires')->join('vagues','intermediaires.vague_id','=','vagues.id')
                ->where('vagues.id',$id)
                ->join('produits','intermediaires.prod_id','=','produits.id')
                ->select('*')->get();

            return $data ;
        }


        function deleteIntermediaireByVague($id){
            DB::table('intermediaires')->where('vague_id',$id)->delete();
        }

        function getTypeVague($id){
            $data=DB::table('vagues')->join('types','vagues.type_id','=','types.id')
                ->where('vagues.id',$id)
                ->select('types.libelle','vagues.created_at')->get();

            return $data ;
        }

        function getLastReste($id){
            $data=DB::table('intermediaires')->where('id',DB::raw("(select MAX(id) from intermediaires where prod_id=$id)"))
            ->select('reste')->get();

            return $data;
        }

         function getSommeBoul($horaire,$date){
                $data=DB::table('vagues')->where('type_id',4)->where('horaire',$horaire)->where('created_at',$date)
                ->select('somme')->get();
                return $data;
           }

           function getSommePat($horaire,$date){
            $data=DB::table('vagues')->where('type_id',3)->where('horaire',$horaire)->where('created_at',$date)
            ->select('somme')->get();
            return $data;
            }

            function getNbre($id,$horaire,$date,$type){
                $data=DB::table('vagues')->where('type_id',$type)->where('horaire',$horaire)->where('created_at',$date)->whereNotIn('id',[$id])
                ->count();
                return $data;
                }

            function addCaisse($data){
                 return DB::table('caisses')->insert($data);
            }

            function getCaisses(){
                    $data = DB::table('caisses')->orderBy('caisses.id','desc')
                        ->get();
                    return $data;
                }


             function deleteCaisse($id){
                   DB::table('caisses')->where('caisses.id',$id)->delete();
             }


            function  getOneCaisse($id){
              $data=DB::table('caisses')->where('id',$id)->get();
                    return $data;
             }

             function updateCaisse($id,$data){
                    DB::table('caisses')->where('id',$id)->update($data);
                }

               function  getCaisseByHoraire($id,$horaire,$date){
                     $data=DB::table('caisses')->where('horaire',$horaire)->where('created_at',$date)->whereNotIn('id',[$id]) ->count();
                            return $data;
                }
}
