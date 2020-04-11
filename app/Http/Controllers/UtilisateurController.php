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
                    return $this->service->addUtilisateur($request->all());
                }

                function deleteUser(Request $request){
                    $id=$request->id;
                    return $this->service->deleteUtilisateur($id);
                }

                function updateUser(Request $request){
                    $id=$request->id;
                    return $this->service->updateUtilisateur($id,$request->all());
                }

                function getOneUser(Request $request){
                    $id=$request->id;
                    return $this->service->getOneUtilisateur($id);
                }


}
