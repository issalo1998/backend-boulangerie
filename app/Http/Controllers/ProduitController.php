<?php

namespace App\Http\Controllers;
use App\Repositories\ProduitRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProduitController extends Controller
{
        public function __construct()
            {
               $this->service = new ProduitRepository();
            }
            function getProduit(){
                $data = DB::table('produits')->orderBy('produits.id','desc')->get();
                return $data;
            }

            function getProduitByType(Request $request){
                return $this->service->getProduitByType($request->id);
            }

            function addProduit(Request $request){
                $this->service->addProduit($request->all());
                return Response()->json("Bien cree",'201');
            }

            function deleteProduit(Request $request){
                $id=$request->id;
                 $this->service->deleteProduit($id);
                 return Response()->json("Bien cree",'201');
            }

            function updateProduit(Request $request){
                $id=$request->id;
                $this->service->updateProduit($id,$request->all());
                return Response()->json("Bien cree",'201');
            }

            function getOneProduit(Request $request){
                $id=$request->id;
                 return $this->service->getOneProduit($id);
            }
}
