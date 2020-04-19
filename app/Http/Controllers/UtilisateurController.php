<?php

namespace App\Http\Controllers;
use App\Repositories\UtilisateurRepository;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
            public function __construct()
            {
               $this->service = new UtilisateurRepository();
            }

                function getUser(){
                    return $this->service->getUtilisateur();
                }

                function addUser(Request $request){
                    $this->service->addUtilisateur($request->all());
                    return Response()->json("Bien cree",'201');
                }

                function deleteUser(Request $request){
                    $id=$request->id;
                     $this->service->deleteUtilisateur($id);
                     return Response()->json("Bien cree",'201');
                }

                function updateUser(Request $request){
                    $id=$request->id;
                    $this->service->updateUtilisateur($id,$request->all());
                    return Response()->json("Bien cree",'201');
                }

                function getOneUser(Request $request){
                    $id=$request->id;
                    return $this->service->getOneUtilisateur($id);
                }


}
