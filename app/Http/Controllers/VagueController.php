<?php

namespace App\Http\Controllers;
use App\Repositories\VagueRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VagueController extends Controller
{
            public function __construct()
            {
               $this->service = new VagueRepository();
            }

             function getProdByType(Request $request){
                    return $this->service->getProdByType($request->id);
                }

                function addVague(Request $request){

                    return $this->service->addVague($request->all());
                }

                function getVague(Request $request){

                    return $this->service->getVague($request->id);
                }

                function deleteVague(Request $request){

                    return $this->service->deleteVague($request->id);
                }

                function updateVague(Request $request){

                    return $this->service->updateVague($request->id,$request->all());
                }

                function getLastVague(){
                    $vague=DB::table('vagues')->where('id',DB::raw("(select MAX(id) from vagues)"))->get();
                    return $vague;
                 }

                function addIntermediaire(Request $request){
                    return $this->service->addIntermediaire($request->all());
                }

                function getOneVague(Request $request){

                    return $this->service->getOneVague($request->id);
                }

                 function getIntermediairesByVague(Request $request){
                    $data=DB::table('intermediaires')->where('vague_id',$request->id)->get();
                    return $data;
                }

                function deleteIntermediaireByVague(Request $request){

                    return $this->service->deleteIntermediaireByVague($request->id);
                }

                function getIntermediairesDetails(Request $request){

                    return $this->service->getIntermediaires($request->id);
                }

                function getTypeVague(Request $request){

                    return $this->service->getTypeVague($request->id);
                }

                function getIntermediaires(Request $request){
                    $data=DB::table('intermediaires')->join('vagues','intermediaires.vague_id','=','vagues.id')
                    ->where('vagues.id',$request->id)
                    ->join('produits','intermediaires.prod_id','=','produits.id')
                    ->select('*')->get();
                    return $data ;
                }

                function getLastReste(Request $request){

                        return $this->service->getLastReste($request->id);
                 }

                 function getSommeBoul(Request $request){

                         return $this->service->getSommeBoul($request->horaire,$request->date);
                 }
                  function getSommePat(Request $request){

                       return $this->service->getSommePat($request->horaire,$request->date);
                   }

                    function getNbre(Request $request){

                          return $this->service->getNbre($request->id,$request->horaire,$request->date,$request->type);
                       }

                   function addCaisse(Request $request){

                       $this->service->addCaisse($request->all());
                       return Response()->json("Bien cree",'201');
                   }

                   function getCaisses(){

                         return $this->service->getCaisses();
                   }

                   function deletecaisse(Request $request){

                         $this->service->deleteCaisse($request->id);
                         return Response()->json("Bien cree",'201');
                   }

                   function getOneCaisse(Request $request){

                       return $this->service->getOneCaisse($request->id);
                   }

                    function updateCaisse(Request $request){

                        $this->service->updateCaisse($request->id,$request->all());
                        return Response()->json("Bien cree",'201');
                     }

                  function  getCaisseByHoraire(Request $request){
                         return $this->service->getCaisseByHoraire($request->id,$request->horaire,$request->date);
                  }
                  public function getcaissedumois($id) {
                    $qry = "SELECT  verse as vs,created_at as dt,horaire as hr  from caisses where MONTH(created_at)=".$id."";
                    $data = DB::select($qry);
                    return response()->json($data, '200');
                 }
                 public function getdatemois($id) {
                    $qry = "SELECT created_at as dt from caisses  where MONTH(created_at)=".$id." group by created_at";
                    $data = DB::select($qry);
                    return response()->json($data, '200');
                 }
                 
}
