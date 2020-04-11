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
                 return $this->service->addProfil($request->all());
             }

             function deleteProfil(Request $request){
                 $id=$request->id;
                 return $this->service->deleteProfil($id);
             }

             function updateProfil(Request $request){
                 $id=$request->id;
                 return $this->service->updateProfil($id,$request->all());
             }

             function getOneProfil(Request $request){
                 $id=$request->id;
                 return $this->service->getOneProfil($id);
             }
}
