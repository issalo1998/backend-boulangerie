<?php

namespace App\Http\Controllers;
use App\Repositories\ProduitRepository;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
        public function __construct()
            {
               $this->service = new ProduitRepository();
            }

            function getProduitByType(Request $request){
                return $this->service->getProduitByType($request->id);
            }

            function addProduit(Request $request){
                return $this->service->addProduit($request->all());
            }

            function deleteProduit(Request $request){
                $id=$request->id;
                 return $this->service->deleteProduit($id);
            }

            function updateProduit(Request $request){
                $id=$request->id;
                return $this->service->updateProduit($id,$request->all());
            }

            function getOneProduit(Request $request){
                $id=$request->id;
                 return $this->service->getOneProduit($id);
            }
}
