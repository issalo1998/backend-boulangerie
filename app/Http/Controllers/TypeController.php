<?php

namespace App\Http\Controllers;
use App\Repositories\TypeRepository;
use Illuminate\Http\Request;

class TypeController extends Controller
{
            public function __construct()
                {
                   $this->service = new TypeRepository();
                }


            function getType(){
                return $this->service->getType();
            }

            function addType(Request $request){
                $this->service->addType($request->all());
                return Response()->json("Bien cree",'201');
            }

            function deleteType(Request $request){
                $id=$request->id;
                 $this->service->deleteType($id);
                 return Response()->json("Bien cree",'201');
            }

            function updateType(Request $request){
                $id=$request->id;
                $this->service->updateType($id,$request->all());
                return Response()->json("Bien cree",'201');
            }

            function getOneType(Request $request){
                $id=$request->id;
                 return $this->service->getOneType($id);
                 }
}
