<?php

namespace App\Http\Controllers;
use App\Repositories\ProfilRepository;
use Illuminate\Http\Request;

class ProfilController extends Controller
{

        public function __construct()
            {
               $this->service = new ProfilRepository();
            }

             function getProfil(){
                return $this->service->getProfil();
             }

             function addProfil(Request $request){
                $this->service->addProfil($request->all());
                return Response()->json("Bien cree",'201');
             }

             function deleteProfil(Request $request){
                 $id=$request->id;
            $this->service->deleteProfil($id);
                 return Response()->json("Bien cree",'201');
             }

             function updateProfil(Request $request){
                 $id=$request->id;
                 $this->service->updateProfil($id,$request->all());
                 return Response()->json("Bien cree",'201');
             }

             function getOneProfil(Request $request){
                 $id=$request->id;
                 return $this->service->getOneProfil($id);
             }
}
